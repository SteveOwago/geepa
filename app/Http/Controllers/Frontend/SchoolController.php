<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySchoolRequest;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\School;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SchoolController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('school_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schools = School::with(['created_by', 'media'])->get();

        return view('frontend.schools.index', compact('schools'));
    }

    public function create()
    {
        abort_if(Gate::denies('school_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.schools.create');
    }

    public function store(StoreSchoolRequest $request)
    {
        $school = School::create($request->all());

        if ($request->input('logo', false)) {
            $school->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $school->id]);
        }

        return redirect()->route('frontend.schools.index');
    }

    public function edit(School $school)
    {
        abort_if(Gate::denies('school_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $school->load('created_by');

        return view('frontend.schools.edit', compact('school'));
    }

    public function update(UpdateSchoolRequest $request, School $school)
    {
        $school->update($request->all());

        if ($request->input('logo', false)) {
            if (!$school->logo || $request->input('logo') !== $school->logo->file_name) {
                if ($school->logo) {
                    $school->logo->delete();
                }
                $school->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($school->logo) {
            $school->logo->delete();
        }

        return redirect()->route('frontend.schools.index');
    }

    public function show(School $school)
    {
        abort_if(Gate::denies('school_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $school->load('created_by');

        return view('frontend.schools.show', compact('school'));
    }

    public function destroy(School $school)
    {
        abort_if(Gate::denies('school_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $school->delete();

        return back();
    }

    public function massDestroy(MassDestroySchoolRequest $request)
    {
        School::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('school_create') && Gate::denies('school_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new School();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
