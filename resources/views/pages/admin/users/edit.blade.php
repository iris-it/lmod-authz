@extends('layouts.full')

@section('content')

    <h1>{{__('Edit user')}}</h1>

    {!! Form::model($user, ['route' => ['authz.admin_update_users', $user->id], 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

    @include('authz::admin.users.forms.user')

    {!! Form::close() !!}

@endsection