@extends('layouts.full')

@section('content')

    <h1>{{__('Create permission')}}</h1>

    {!! Form::open(['route' => 'authz.admin_store_permissions', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.permissions.forms.permission')

    {!! Form::close() !!}

@endsection