{!! Form::open(['route' => 'authz.update_account_password', 'method' => 'PUT', 'class'=> 'uk-form-stacked']) !!}

<div class="uk-margin">

    {!! Form::label('old_password', __('Old password'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::password('old_password', ['class' =>($errors->has('old_password') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
    </div>

    @if ($errors->has('old_password'))
        <div class="uk-text-danger">{{ $errors->first('old_password') }}</div>
    @endif

</div>

<div class="uk-margin">

    {!! Form::label('new_password', __('New password'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::password('new_password', ['class' =>($errors->has('new_password') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
    </div>

    @if ($errors->has('new_password'))
        <div class="uk-text-danger">{{ $errors->first('new_password') }}</div>
    @endif

</div>


<div class="uk-margin">

    {!! Form::label('new_password_confirmation', __('Password confirmation'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::password('new_password_confirmation', ['class' =>($errors->has('new_password_confirmation') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
    </div>

    @if ($errors->has('new_password_confirmation'))
        <div class="uk-text-danger">{{ $errors->first('new_password_confirmation') }}</div>
    @endif

</div>

{!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary']) !!}

{!! Form::close() !!}