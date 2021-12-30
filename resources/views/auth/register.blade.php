@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card mx-4">
            <div class="card-body p-4">

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <h1>{{ trans('panel.site_title') }}</h1>
                    <p class="text-muted">{{ trans('global.register') }}</p>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="First Name" value="{{ old('name', null) }}">&nbsp;
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="lname" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" required autofocus placeholder="Last Name" value="{{ old('lname', null) }}">
                        @if($errors->has('lname'))
                            <div class="invalid-feedback">
                                {{ $errors->first('lname') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope fa-fw"></i>
                            </span>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone fa-fw"></i>
                            </span>
                        </div>
                        <input type="number" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" required placeholder="Phone" value="{{ old('phone', null) }}">
                        @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-flag fa-fw"></i>
                            </span>
                        </div>
                        <select class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                            @foreach($countries as $id => $entry)
                                <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-map-marker fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" required autofocus placeholder="Enter Your Current City" value="{{ old('city', null) }}">&nbsp;
                        @if($errors->has('city'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city') }}
                            </div>
                        @endif
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-card fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="zipcode" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" required autofocus placeholder="Zip Code" value="{{ old('zipcode', null) }}">
                        @if($errors->has('zipcode'))
                            <div class="invalid-feedback">
                                {{ $errors->first('zipcode') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-graduation-cap fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="school" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" required placeholder="Your School Name">
                        @if($errors->has('school'))
                            <div class="invalid-feedback">
                                {{ $errors->first('school') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-list fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="grade" class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" required autofocus placeholder="Grade | Form" value="{{ old('grade', null) }}">&nbsp;
                        @if($errors->has('grade'))
                            <div class="invalid-feedback">
                                {{ $errors->first('grade') }}
                            </div>
                        @endif
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-map-marker fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" required autofocus placeholder="School Location" value="{{ old('location', null) }}">
                        @if($errors->has('location'))
                            <div class="invalid-feedback">
                                {{ $errors->first('location') }}
                            </div>
                        @endif
                    </div>

                    <button class="btn btn-block btn-primary">
                        {{ trans('global.register') }}
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
