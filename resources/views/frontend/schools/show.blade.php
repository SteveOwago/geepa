@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.school.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.schools.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $school->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $school->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.academic_year') }}
                                    </th>
                                    <td>
                                        {{ App\Models\School::ACADEMIC_YEAR_SELECT[$school->academic_year] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $school->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.city') }}
                                    </th>
                                    <td>
                                        {{ $school->city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.detailed_location') }}
                                    </th>
                                    <td>
                                        {{ $school->detailed_location }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.post_office_box') }}
                                    </th>
                                    <td>
                                        {{ $school->post_office_box }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($school->logo)
                                            <a href="{{ $school->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $school->logo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_2') }}
                                    </th>
                                    <td>
                                        {{ $school->contact_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_4') }}
                                    </th>
                                    <td>
                                        {{ $school->contact_4 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_3') }}
                                    </th>
                                    <td>
                                        {{ $school->contact_3 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.contact_1') }}
                                    </th>
                                    <td>
                                        {{ $school->contact_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.website') }}
                                    </th>
                                    <td>
                                        {{ $school->website }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.schools.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection