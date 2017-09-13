@extends('layouts.full')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Delete permission')}}
            </div>

            {!! Form::open(['route' => ['authz.admin_destroy_permissions', $permission->id], 'method' => 'DELETE', 'class'=> 'uk-form-stacked']) !!}

            {{__('Are you sure to delete')}} {{__('the permission')}} {{$permission->name}}

            <hr>

            <a href="{{route('authz.admin_index_permissions')}}" class="uk-button uk-button-primary">{{__('Go back')}}</a>

            {!! Form::submit(__('Delete permission'), ['class' => 'uk-button uk-button-primary uk-align-right']) !!}

            {!! Form::close() !!}

        </div>

    </div>

@endsection