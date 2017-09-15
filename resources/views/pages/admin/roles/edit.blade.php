@extends('layouts.full')

@section('content')

    <h1>{{__('Edit role')}}</h1>

    {!! Form::model($role, ['route' => ['authz.admin_update_roles', $role->id], 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.roles.forms.role')

    {!! Form::close() !!}

    <hr>


    <h1>{{__('Edit role permissions')}}</h1>

    {!! Form::model($role, ['route' => ['authz.admin_sync_roles_permissions', $role->id], 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.roles.forms.permissions_sync')

    {!! Form::close() !!}

@endsection