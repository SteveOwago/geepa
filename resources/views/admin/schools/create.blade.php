@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.school.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.schools.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.school.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.school.fields.academic_year') }}</label>
                <select class="form-control {{ $errors->has('academic_year') ? 'is-invalid' : '' }}" name="academic_year" id="academic_year" required>
                    <option value disabled {{ old('academic_year', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\School::ACADEMIC_YEAR_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('academic_year', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('academic_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('academic_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.academic_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.school.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city">{{ trans('cruds.school.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}" required>
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="detailed_location">{{ trans('cruds.school.fields.detailed_location') }}</label>
                <input class="form-control {{ $errors->has('detailed_location') ? 'is-invalid' : '' }}" type="text" name="detailed_location" id="detailed_location" value="{{ old('detailed_location', '') }}">
                @if($errors->has('detailed_location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('detailed_location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.detailed_location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="post_office_box">{{ trans('cruds.school.fields.post_office_box') }}</label>
                <input class="form-control {{ $errors->has('post_office_box') ? 'is-invalid' : '' }}" type="text" name="post_office_box" id="post_office_box" value="{{ old('post_office_box', '') }}">
                @if($errors->has('post_office_box'))
                    <div class="invalid-feedback">
                        {{ $errors->first('post_office_box') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.post_office_box_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="logo">{{ trans('cruds.school.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_2">{{ trans('cruds.school.fields.contact_2') }}</label>
                <input class="form-control {{ $errors->has('contact_2') ? 'is-invalid' : '' }}" type="text" name="contact_2" id="contact_2" value="{{ old('contact_2', '') }}">
                @if($errors->has('contact_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.contact_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_4">{{ trans('cruds.school.fields.contact_4') }}</label>
                <input class="form-control {{ $errors->has('contact_4') ? 'is-invalid' : '' }}" type="text" name="contact_4" id="contact_4" value="{{ old('contact_4', '') }}">
                @if($errors->has('contact_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.contact_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_3">{{ trans('cruds.school.fields.contact_3') }}</label>
                <input class="form-control {{ $errors->has('contact_3') ? 'is-invalid' : '' }}" type="text" name="contact_3" id="contact_3" value="{{ old('contact_3', '') }}">
                @if($errors->has('contact_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.contact_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_1">{{ trans('cruds.school.fields.contact_1') }}</label>
                <input class="form-control {{ $errors->has('contact_1') ? 'is-invalid' : '' }}" type="text" name="contact_1" id="contact_1" value="{{ old('contact_1', '') }}" required>
                @if($errors->has('contact_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.contact_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="website">{{ trans('cruds.school.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', '') }}">
                @if($errors->has('website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.school.fields.website_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.schools.storeMedia') }}',
    maxFilesize: 3, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 3,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($school) && $school->logo)
      var file = {!! json_encode($school->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection