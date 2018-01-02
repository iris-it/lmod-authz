{!! Form::model($user, ['route' => 'authz.update_account_user', 'method' => 'PUT']) !!}

<div class="form-group row {{ ($errors->has('firstname')) ? 'is-invalid' : '' }}">
    <div class="col-12">
        <div class="form-material floating">
            {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
            {!! Form::label('firstname', __('Firstname')) !!}
        </div>
        @if ($errors->has('firstname'))
            <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
        @endif
    </div>
</div>

<div class="form-group row {{ ($errors->has('lastname')) ? 'is-invalid' : '' }}">
    <div class="col-12">
        <div class="form-material floating">
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            {!! Form::label('lastname', __('Lastname')) !!}
        </div>
        @if ($errors->has('lastname'))
            <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
        @endif
    </div>
</div>

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