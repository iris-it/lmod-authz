@extends('layouts.auth')

@section('content')

    <h1 class="h3 font-w700 mt-30 mb-10">{{__('Send reset password email')}}</h1>

    {!! Form::open(['route' => 'authz.post_forgot_password', 'method' => 'POST']) !!}

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

    <div class="form-group">
        {!! Form::submit(__('Submit'), ['class' => 'btn btn-sm btn-hero btn-alt-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
