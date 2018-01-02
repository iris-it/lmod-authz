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

@if(config('irisit_authz.admin_generate_and_send_password', true) === false)

    <div class="form-group row {{ ($errors->has('password')) ? 'is-invalid' : '' }}">
        <div class="col-12">
            <div class="form-material floating">
                {!! Form::password('password', ['class' => 'form-control']) !!}
                {!! Form::label('password', __('Password')) !!}
            </div>
            @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
        </div>
    </div>

    <div class="form-group row {{ ($errors->has('password_confirmation')) ? 'is-invalid' : '' }}">
        <div class="col-12">
            <div class="form-material floating">
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                {!! Form::label('password_confirmation', __('Password confirmation')) !!}
            </div>
            @if ($errors->has('password_confirmation'))
                <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>
    </div>

@endif


<div class="form-group row {{ ($errors->has('role_id')) ? 'is-invalid' : '' }}">
    <div class="col-12">
        <div class="form-material floating">
            {!! Form::select('role_id', $roles, null,['class' => 'form-control']) !!}
            {!! Form::label('role_id', __('Role')) !!}
        </div>
        @if ($errors->has('role_id'))
            <div class="invalid-feedback">{{ $errors->first('role_id') }}</div>
        @endif
    </div>
</div>


