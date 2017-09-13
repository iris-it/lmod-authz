@extends('layouts.admin')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Delete role')}}
            </div>

            {!! Form::open(['route' => ['authz.admin_destroy_roles', $role->id], 'method' => 'DELETE', 'class'=> 'uk-form-stacked']) !!}

            {{__('Are you sure to delete')}} {{__('the role')}} {{$role->name}}

            <hr>

            <a href="{{route('authz.admin_index_roles')}}" class="uk-button uk-button-primary">{{__('Go back')}}</a>

            {!! Form::submit(__('Delete role'), ['class' => 'uk-button uk-button-primary uk-align-right']) !!}

            {!! Form::close() !!}

        </div>

    </div>

@endsection