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

    {!! Form::label('role', __('Role'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::select('role_id', $roles, null,['class' => 'uk-input']) !!}
    </div>

    @if ($errors->has('role_id'))
        <div class="uk-text-danger">{{ $errors->first('role_id') }}</div>
    @endif

</div>

<a href="{{route('authz.admin_index_users')}}" class="uk-button uk-button-primary">{{__('Go back')}}</a>

{!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary uk-align-right']) !!}
