<div>
    <div class="form-group form-group-default {{(!$errors->has('roles[]') ?: 'has-error')}}">
        {!! Form::label('roles[]', __('Roles')) !!}
        <div class="controls">
            {!! Form::select('roles[]', $roles, array_pluck($permission->roles, 'id'), ['multiple', 'class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    @if ($errors->has('roles[]'))
        <label id="roles[]-error" class="error" for="roles[]">
            {{ $errors->first('roles[]') }}
        </label>
    @endif
</div>

<div class="row m-t-15">
    <div class="col-md-6">
        <a href="{{route('authz.admin_index_permissions')}}" class="btn btn-primary btn-cons pull-left">
            {{__('Go back')}}
        </a>
    </div>
    <div class="col-md-6">
        {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons pull-right']) !!}
    </div>
</div>