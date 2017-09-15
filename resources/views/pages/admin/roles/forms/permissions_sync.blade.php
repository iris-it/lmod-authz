<div>
    <div class="form-group form-group-default {{(!$errors->has('permissions[]') ?: 'has-error')}}">
        {!! Form::label('permissions[]', __('Permissions')) !!}
        <div class="controls">
            {!! Form::select('permissions[]', $permissions, array_pluck($role->permissions, 'id'), ['multiple', 'class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    @if ($errors->has('permissions[]'))
        <label id="permissions[]-error" class="error" for="permissions[]">
            {{ $errors->first('permissions[]') }}
        </label>
    @endif
</div>

<div class="row m-t-15">
    <div class="col-md-6">
        <a href="{{route('authz.admin_index_roles')}}" class="btn btn-primary btn-cons pull-left">
            {{__('Go back')}}
        </a>
    </div>
    <div class="col-md-6">
        {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons pull-right']) !!}
    </div>
</div>