@extends('layouts.admin')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Edit permission')}}
            </div>

            {!! Form::model($permission, ['route' => ['authz.admin_update_permissions', $permission->id], 'method' => 'PUT', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.permissions.forms.permission')

            {!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary']) !!}

            {!! Form::close() !!}

            <hr>

            {!! Form::model($permission, ['route' => ['authz.admin_sync_permissions_roles', $permission->id], 'method' => 'PUT', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.permissions.forms.roles_sync')

            {!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>

@endsection