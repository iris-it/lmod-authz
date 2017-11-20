@extends('layouts.auth')

@section('content')

    <h1>{{__('Login')}}</h1>

    {!! Form::open(['route' => 'authz.post_login', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

    <div>
        <div class="form-group form-group-default {{(!$errors->has('email') ?: 'has-error')}}">
            {!! Form::label('email', __('Email')) !!}
            <div class="controls">
                {!! Form::email('email', null, ['placeholder' => __('Email'), 'class' =>($errors->has('email') ? 'form-control error' : 'form-control')]) !!}
            </div>
        </div>
        @if ($errors->has('email'))
            <label id="email-error" class="error" for="email">
                {{ $errors->first('email') }}
            </label>
        @endif
    </div>

    <div>
        <div class="form-group form-group-default {{(!$errors->has('email') ?: 'has-error')}}">
            {!! Form::label('password', __('Password')) !!}
            <div class="controls">
                {!! Form::password('password', ['placeholder' => __('Password'), 'class' =>($errors->has('password') ? 'form-control error' : 'form-control')]) !!}
            </div>
        </div>
        @if ($errors->has('password'))
            <label id="password-error" class="error" for="password">
                {{ $errors->first('password') }}
            </label>
        @endif
    </div>


    <div class="row">
        <div class="col-md-6 no-padding sm-p-l-10">
            <div class="checkbox">
                {!! Form::checkbox('remember', null, null) !!}
                <label for="checkbox1">{{ __('Remember me ?') }}</label>
            </div>
        </div>
        @if(config('irisit_authz.feature_reset_enabled', true))
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <a href="{{route('authz.get_forgot_password')}}" class="text-info small">{{ __('Forgot password ?') }}</a>
            </div>
        @endif
    </div>

    {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons m-t-10', 'name' => 'submit-login']) !!}

    {!! Form::close() !!}

@endsection