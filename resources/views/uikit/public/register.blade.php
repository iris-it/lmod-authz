@extends('layouts.auth')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Register')}}
            </div>

            {!! Form::open(['route' => 'authz.post_register', 'method' => 'POST', 'class'=> 'uk-form-stacked']) !!}

            <div class="uk-margin">

                {!! Form::label('firstname', __('Firstname'), ['class' => 'uk-form-label']) !!}

                <div class="uk-form-controls">
                    {!! Form::text('firstname', null, ['class' =>($errors->has('firstname') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
                </div>

                @if ($errors->has('firstname'))
                    <div class="uk-text-danger">{{ $errors->first('firstname') }}</div>
                @endif

            </div>

            <div class="uk-margin">

                {!! Form::label('lastname', __('Lastname'), ['class' => 'uk-form-label']) !!}

                <div class="uk-form-controls">
                    {!! Form::text('lastname', null, ['class' =>($errors->has('lastname') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
                </div>

                @if ($errors->has('lastname'))
                    <div class="uk-text-danger">{{ $errors->first('lastname') }}</div>
                @endif

            </div>

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

                {!! Form::label('password_confirmation', __('Password confirmation'), ['class' => 'uk-form-label']) !!}

                <div class="uk-form-controls">
                    {!! Form::password('password_confirmation', ['class' =>($errors->has('password_confirmation') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
                </div>

                @if ($errors->has('password_confirmation'))
                    <div class="uk-text-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif

            </div>

            {!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>

@endsection