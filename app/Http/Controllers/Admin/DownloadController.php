<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDownloadRequest;
use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use App\Models\Download;
use Illuminate\Http\Request;
use Gate;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;


class DownloadController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('user_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $downloads = Download::with(['media'])->paginate(10);
        return view('admin.downloads.index', compact('downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.downloads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDownloadRequest $request)
    {
        $downloads = Download::create($request->all());

        if ($request->input('document_file', false)) {
            $downloads->addMedia(storage_path('tmp/uploads/' . basename($request->input('document_file'))))->toMediaCollection('document_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $downloads->id]);
        }

        return redirect()->route('admin.downloads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        abort_if(Gate::denies('crm_document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.downloads.show', compact('download'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        abort_if(Gate::denies('crm_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');



        return view('admin.downloads.edit', compact('download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDownloadRequest $request, Download $download)
    {
        $download->update($request->all());

        if ($request->input('document_file', false)) {
            if (!$download->document_file || $request->input('document_file') !== $download->document_file->file_name) {
                if ($download->document_file) {
                    $download->document_file->delete();
                }
                $download->addMedia(storage_path('tmp/uploads/' . basename($request->input('document_file'))))->toMediaCollection('document_file');
            }
        } elseif ($download->document_file) {
            $download->document_file->delete();
        }

        return redirect()->route('admin.downloads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        abort_if(Gate::denies('crm_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $download->delete();

        return back();
    }

    public function massDestroy(MassDestroyDownloadRequest $request)
    {
        Download::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('crm_document_create') && Gate::denies('crm_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Download();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
