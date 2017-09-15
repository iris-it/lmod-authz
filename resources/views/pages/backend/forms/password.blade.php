{!! Form::open(['url' => route('authz.update_account_password').'#password', 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

<div>
    <div class="form-group form-group-default {{(!$errors->has('old_password') ?: 'has-error')}}">
        {!! Form::label('old_password', __('Old password')) !!}
        <div class="controls">
            {!! Form::password('old_password', ['placeholder' => __('Old password'), 'class' =>($errors->has('old_password') ? 'form-control error' : 'form-control')]) !!}
        </div>
    </div>
    @if ($errors->has('old_password'))
        <label id="old_password-error" class="error" for="old_password">
            {{ $errors->first('old_password') }}
        </label>
    @endif
</div>

<div>
    <div class="form-group form-group-default {{(!$errors->has('new_password') ?: 'has-error')}}">
        {!! Form::label('new_password', __('New password')) !!}
        <div class="controls">
            {!! Form::password('new_password', ['placeholder' => __('New password'), 'class' =>($errors->has('new_password') ? 'form-control error' : 'form-control')]) !!}
        </div>
    </div>
    @if ($errors->has('new_password'))
        <label id="new_password-error" class="error" for="new_password">
            {{ $errors->first('new_password') }}
        </label>
    @endif
</div>


<div>
    <div class="form-group form-group-default {{(!$errors->has('new_password_confirmation') ?: 'has-error')}}">
        {!! Form::label('new_password_confirmation', __('Password confirmation')) !!}
        <div class="controls">
            {!! Form::password('new_password_confirmation', ['placeholder' => __('Password confirmation'), 'class' =>($errors->has('new_password_confirmation') ? 'form-control error' : 'form-control')]) !!}
        </div>
    </div>
    @if ($errors->has('new_password_confirmation'))
        <label id="new_password_confirmation-error" class="error" for="new_password_confirmation">
            {{ $errors->first('new_password_confirmation') }}
        </label>
    @endif
</div>

{!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons m-t-10']) !!}

{!! Form::close() !!}