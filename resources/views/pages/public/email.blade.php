@extends('layouts.auth')

@section('content')

    <h1>{{__('Send reset password email')}}</h1>

    {!! Form::open(['route' => 'authz.post_forgot_password', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

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

    {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons m-t-10', 'name' => 'submit-send-password']) !!}

    {!! Form::close() !!}

@endsection
