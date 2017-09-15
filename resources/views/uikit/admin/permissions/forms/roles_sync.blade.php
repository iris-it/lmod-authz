<div class="uk-margin">

    {!! Form::label('roles[]', __('Roles'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::select('roles[]', $roles, array_pluck($permission->roles, 'id'), ['multiple', 'class'=> 'uk-select'] ) !!}
    </div>

    @if ($errors->has('roles[]'))
        <div class="uk-text-danger">{{ $errors->first('roles[]') }}</div>
    @endif

</div>

<a href="{{route('authz.admin_index_permissions')}}" class="uk-button uk-button-primary">{{__('Go back')}}</a>

{!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary uk-align-right']) !!}