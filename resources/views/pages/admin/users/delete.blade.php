@extends('layouts.full')

@section('content')

    <h1>{{__('Delete user')}}</h1>

    {!! Form::model($user, ['route' => ['authz.admin_destroy_users', $user->id], 'method' => 'DELETE', 'class'=> 'p-t-15']) !!}

    {{__('Are you sure to delete')}} <b>{{$user->firstname}} {{$user->lastname}}</b> ?

    <hr>

    <a href="{{route('authz.admin_index_users')}}" class="btn btn-primary btn-cons pull-left">{{__('Go back')}}</a>

    {!! Form::submit(__('Delete user'), ['class' => 'btn btn-danger btn-cons pull-right']) !!}

    {!! Form::close() !!}

@endsection