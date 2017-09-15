@extends('layouts.full')

@section('content')

    <h1>{{__('Create user')}}</h1>

    {!! Form::open(['route' => 'authz.admin_store_users', 'method' => 'POST', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.users.forms.user')

    {!! Form::close() !!}

@endsection