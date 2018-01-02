@extends('layouts.auth')

@section('content')

    <div class="uk-margin-top uk-margin-bottom">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Login')}}
            </div>

            {!! Form::open(['route' => 'authz.post_login', 'method' => 'POST', 'class'=> 'uk-form-stacked']) !!}

            <div class="uk-margin">

                {!! Form::label('email', __('Email'), ['class' => 'uk-form-label']) !!}

                <div class="uk-form-controls">
                    {!! Form::email('email', null, ['class' =>($errors->has('email') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
                </div>

                @if ($errors->has('email'))
                    <div class="uk-text-danger">{{ $errors->first('email') }}</div>
                @endif

            </div>


            <div class="uk-margin">

                {!! Form::label('password', __('Password'), ['class' => 'uk-form-label']) !!}

                <div class="uk-form-controls">
                    {!! Form::password('password', ['class' =>($errors->has('password') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
                </div>

                @if ($errors->has('password'))
                    <div class="uk-text-danger">{{ $errors->first('password') }}</div>
                @endif

            </div>

            <div class="uk-margin">
                <label>
                    {!! Form::checkbox('remember', 1, null, ['class' => 'uk-checkbox']) !!}
                    {{ __('Remember me ?') }}
                </label>
            </div>

            {!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary', 'name' => 'submit-login']) !!}

            @if(config('irisit_authz.feature_reset_enabled', true))
                <a class="uk-align-right@m" href="{{route('authz.get_forgot_password')}}">{{ __('Forgot password ?') }}</a>
            @endif

            {!! Form::close() !!}

        </div>

    </div>
@endsection
