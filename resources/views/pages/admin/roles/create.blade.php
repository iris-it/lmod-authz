@extends('layouts.full')

@section('content')

    <h1>{{__('Create role')}}</h1>

    {!! Form::open(['route' => 'authz.admin_store_roles', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.roles.forms.role')

    {!! Form::close() !!}

@endsection