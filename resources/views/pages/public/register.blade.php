@extends('layouts.auth')

@section('content')

    <h1>{{__('Register')}}</h1>

    {!! Form::open(['route' => 'authz.post_register', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

    <div>
        <div class="form-group form-group-default {{(!$errors->has('firstname') ?: 'has-error')}}">
            {!! Form::label('firstname', __('Firstname')) !!}
            <div class="controls">
                {!! Form::text('firstname', null, ['placeholder' => __('Firstname'), 'class' =>($errors->has('firstname') ? 'form-control error' : 'form-control')]) !!}
            </div>
        </div>
        @if ($errors->has('firstname'))
            <label id="firstname-error" class="error" for="firstname">
                {{ $errors->first('firstname') }}
            </label>
        @endif
    </div>

    <div>
        <div class="form-group form-group-default {{(!$errors->has('lastname') ?: 'has-error')}}">
            {!! Form::label('lastname', __('Lastname')) !!}
            <div class="controls">
                {!! Form::text('lastname', null, ['placeholder' => __('Lastname'), 'class' =>($errors->has('lastname') ? 'form-control error' : 'form-control')]) !!}
            </div>
        </div>
        @if ($errors->has('lastname'))
            <label id="lastname-error" class="error" for="lastname">
                {{ $errors->first('lastname') }}
            </label>
        @endif
    </div>

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

    {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons m-t-10', 'name' => 'submit-register']) !!}

    {!! Form::close() !!}

@endsection