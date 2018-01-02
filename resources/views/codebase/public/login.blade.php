@extends('layouts.auth')

@section('content')

    <h1 class="h3 font-w700 mt-30 mb-10">{{__('Login')}}</h1>

    {!! Form::open(['route' => 'authz.post_login', 'method' => 'POST']) !!}

    <div class="form-group row {{ ($errors->has('email')) ? 'is-invalid' : '' }}">
        <div class="col-12">
            <div class="form-material floating">
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                {!! Form::label('email', __('Email')) !!}
            </div>
            @if ($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>
    </div>

    <div class="form-group row {{ ($errors->has('password')) ? 'is-invalid' : '' }}">
        <div class="col-12">
            <div class="form-material floating">
                {!! Form::email('password', null, ['class' => 'form-control']) !!}
                {!! Form::label('password', __('Password')) !!}
            </div>
            @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <label class="custom-control custom-checkbox">
                {!! Form::checkbox('remember', null, null, ['class' => 'custom-control-input']) !!}
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">{{ __('Remember me ?') }}</span>
            </label>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit(__('Submit'), ['class' => 'btn btn-sm btn-hero btn-alt-primary']) !!}
        <div class="mt-30">
            @if(config('irisit_authz.feature_reset_enabled', true))
                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{route('authz.get_forgot_password')}}">
                    <i class="fa fa-warning mr-5"></i> {{ __('Forgot password ?') }}
                </a>
            @endif
        </div>
    </div>

    {!! Form::close() !!}

@endsection
