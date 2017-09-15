@extends('layouts.full')

@section('content')

    <h1>{{__('Edit permission')}}</h1>

    {!! Form::model($permission, ['route' => ['authz.admin_update_permissions', $permission->id], 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.permissions.forms.permission')

    {!! Form::close() !!}

    <hr>

    <h1>{{__('Edit permission role')}}</h1>

    {!! Form::model($permission, ['route' => ['authz.admin_sync_permissions_roles', $permission->id], 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.permissions.forms.roles_sync')

    {!! Form::close() !!}

@endsection