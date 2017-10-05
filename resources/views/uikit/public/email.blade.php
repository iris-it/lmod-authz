@extends('layouts.auth')

@section('content')

    <div class="uk-margin-top uk-margin-bottom">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Send reset password email')}}
            </div>

            {!! Form::open(['route' => 'authz.post_forgot_password', 'method' => 'POST', 'class'=> 'uk-form-stacked']) !!}

            <div class="uk-margin">

                {!! Form::label('email', __('Email'), ['class' => 'uk-form-label']) !!}

                <div class="uk-form-controls">
                    {!! Form::email('email', null, ['class' =>($errors->has('email') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
                </div>

                @if ($errors->has('email'))
                    <div class="uk-text-danger">{{ $errors->first('email') }}</div>
                @endif

            </div>

            {!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary', 'name' => 'submit-send-password']) !!}

            {!! Form::close() !!}

        </div>

    </div>
@endsection
