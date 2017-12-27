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

@if(config('irisit_authz.admin_generate_and_send_password', true) === true)

    <div>
        <div class="form-group form-group-default {{(!$errors->has('password') ?: 'has-error')}}">
            {!! Form::label('password', __('Password')) !!}
            <div class="controls">
                {!! Form::password('password', null, ['class' =>($errors->has('password') ? 'form-control error' : 'form-control')]) !!}
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
                {!! Form::password('password_confirmation', null, ['class' =>($errors->has('password_confirmation') ? 'form-control error' : 'form-control')]) !!}
            </div>
        </div>
        @if ($errors->has('password_confirmation'))
            <label id="password-error" class="error" for="password_confirmation">
                {{ $errors->first('password_confirmation') }}
            </label>
        @endif
    </div>

@endif

<div>
    <div class="form-group form-group-default {{(!$errors->has('role_id') ?: 'has-error')}}">
        {!! Form::label('role_id', __('Role')) !!}
        <div class="controls">
            {!! Form::select('role_id', $roles, null,['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    @if ($errors->has('role_id'))
        <label id="role_id-error" class="error" for="role_id">
            {{ $errors->first('role_id') }}
        </label>
    @endif
</div>

