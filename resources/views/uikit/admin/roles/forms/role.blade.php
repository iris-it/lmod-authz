<div class="uk-margin">

    {!! Form::label('name', __('Name'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::text('name', null, ['class' =>($errors->has('name') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
    </div>

    @if ($errors->has('name'))
        <div class="uk-text-danger">{{ $errors->first('name') }}</div>
    @endif

</div>

<div class="uk-margin">

    {!! Form::label('label', __('Label'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::text('label', null, ['class' =>($errors->has('label') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
    </div>

    @if ($errors->has('label'))
        <div class="uk-text-danger">{{ $errors->first('label') }}</div>
    @endif

</div>

<div class="uk-margin">

    {!! Form::label('description', __('Description'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::text('description', null, ['class' =>($errors->has('description') ? 'uk-input uk-form-danger' : 'uk-input')]) !!}
    </div>

    @if ($errors->has('description'))
        <div class="uk-text-danger">{{ $errors->first('description') }}</div>
    @endif

</div>

<a href="{{route('authz.admin_index_roles')}}" class="uk-button uk-button-primary">{{__('Go back')}}</a>

{!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary uk-align-right']) !!}