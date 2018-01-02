{!! Form::open(['route' => 'authz.update_account_password', 'method' => 'PUT']) !!}

<div class="form-group row {{ ($errors->has('old_password')) ? 'is-invalid' : '' }}">
    <div class="col-12">
        <div class="form-material floating">
            {!! Form::password('old_password', ['class' => 'form-control']) !!}
            {!! Form::label('old_password', __('Old password')) !!}
        </div>
        @if ($errors->has('old_password'))
            <div class="invalid-feedback">{{ $errors->first('old_password') }}</div>
        @endif
    </div>
</div>

<div class="form-group row {{ ($errors->has('new_password')) ? 'is-invalid' : '' }}">
    <div class="col-12">
        <div class="form-material floating">
            {!! Form::password('new_password', ['class' => 'form-control']) !!}
            {!! Form::label('new_password', __('New password')) !!}
        </div>
        @if ($errors->has('new_password'))
            <div class="invalid-feedback">{{ $errors->first('new_password') }}</div>
        @endif
    </div>
</div>

<div class="form-group row {{ ($errors->has('new_password_confirmation')) ? 'is-invalid' : '' }}">
    <div class="col-12">
        <div class="form-material floating">
            {!! Form::password('new_password_confirmation', ['class' => 'form-control']) !!}
            {!! Form::label('new_password_confirmation', __('Password confirmation')) !!}
        </div>
        @if ($errors->has('new_password_confirmation'))
            <div class="invalid-feedback">{{ $errors->first('new_password_confirmation') }}</div>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::submit(__('Submit'), ['class' => 'btn btn-sm btn-hero btn-alt-primary']) !!}
</div>

{!! Form::close() !!}