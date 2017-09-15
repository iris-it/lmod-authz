<div class="uk-margin">

    {!! Form::label('permissions[]', __('Permissions'), ['class' => 'uk-form-label']) !!}

    <div class="uk-form-controls">
        {!! Form::select('permissions[]', $permissions, array_pluck($role->permissions, 'id'), ['multiple', 'class'=> 'uk-select'] ) !!}
    </div>

    @if ($errors->has('permissions[]'))
        <div class="uk-text-danger">{{ $errors->first('permissions[]') }}</div>
    @endif

</div>

<a href="{{route('authz.admin_index_roles')}}" class="uk-button uk-button-primary">{{__('Go back')}}</a>

{!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary uk-align-right']) !!}