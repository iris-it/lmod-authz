@extends('layouts.auth')

@section('content')

    <h1>{{__('Reset password')}}</h1>

    {!! Form::open(['route' => 'authz.post_reset_password', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

    <input type="hidden" name="token" value="{{ $token }}">

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
        <div class="form-group form-group-default {{(!$errors->has('password') ?: 'has-error')}}">
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

    <div>
        <div class="form-group form-group-default {{(!$errors->has('password_confirmation') ?: 'has-error')}}">
            {!! Form::label('password_confirmation', __('Password confirmation')) !!}
            <div class="controls">
                {!! Form::password('password_confirmation', ['placeholder' => __('Password confirmation'), 'class' =>($errors->has('password_confirmation') ? 'form-control error' : 'form-control')]) !!}
            </div>
        </div>
        @if ($errors->has('password_confirmation'))
            <label id="password_confirmation-error" class="error" for="password_confirmation">
                {{ $errors->first('password_confirmation') }}
            </label>
        @endif
    </div>

    {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons m-t-10', 'name' => 'reset-password-submit']) !!}

    {!! Form::close() !!}

@endsection
