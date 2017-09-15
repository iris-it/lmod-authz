@extends('layouts.admin')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Edit role')}}
            </div>

            {!! Form::model($role, ['route' => ['authz.admin_update_roles', $role->id], 'method' => 'PUT', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.roles.forms.role')

            {!! Form::close() !!}

            <hr>

            {!! Form::model($role, ['route' => ['authz.admin_sync_roles_permissions', $role->id], 'method' => 'PUT', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.roles.forms.permissions_sync')

            {!! Form::close() !!}

        </div>

    </div>

@endsection