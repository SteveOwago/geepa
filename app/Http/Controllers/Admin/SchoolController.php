<?php

namespace App\Http\Controllers\Admin;

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
use Yajra\DataTables\Facades\DataTables;

class SchoolController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('school_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = School::with(['created_by'])->select(sprintf('%s.*', (new School())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'school_show';
                $editGate = 'school_edit';
                $deleteGate = 'school_delete';
                $crudRoutePart = 'schools';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('academic_year', function ($row) {
                return $row->academic_year ? School::ACADEMIC_YEAR_SELECT[$row->academic_year] : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('city', function ($row) {
                return $row->city ? $row->city : '';
            });
            $table->editColumn('detailed_location', function ($row) {
                return $row->detailed_location ? $row->detailed_location : '';
            });
            $table->editColumn('post_office_box', function ($row) {
                return $row->post_office_box ? $row->post_office_box : '';
            });
            $table->editColumn('logo', function ($row) {
                if ($photo = $row->logo) {
                    return sprintf(
        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
        $photo->url,
        $photo->thumbnail
    );
                }

                return '';
            });
            $table->editColumn('contact_2', function ($row) {
                return $row->contact_2 ? $row->contact_2 : '';
            });
            $table->editColumn('contact_4', function ($row) {
                return $row->contact_4 ? $row->contact_4 : '';
            });
            $table->editColumn('contact_3', function ($row) {
                return $row->contact_3 ? $row->contact_3 : '';
            });
            $table->editColumn('contact_1', function ($row) {
                return $row->contact_1 ? $row->contact_1 : '';
            });
            $table->editColumn('website', function ($row) {
                return $row->website ? $row->website : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'logo']);

            return $table->make(true);
        }

        return view('admin.schools.index');
    }

    public function create()
    {
        abort_if(Gate::denies('school_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schools.create');
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

        return redirect()->route('admin.schools.index');
    }

    public function edit(School $school)
    {
        abort_if(Gate::denies('school_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $school->load('created_by');

        return view('admin.schools.edit', compact('school'));
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

        return redirect()->route('admin.schools.index');
    }

    public function show(School $school)
    {
        abort_if(Gate::denies('school_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $school->load('created_by');

        return view('admin.schools.show', compact('school'));
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
