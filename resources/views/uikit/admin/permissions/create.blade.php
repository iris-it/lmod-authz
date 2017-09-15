@extends('layouts.admin')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Create permission')}}
            </div>

            {!! Form::open(['route' => 'authz.admin_store_permissions', 'method' => 'POST', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.permissions.forms.permission')

            {!! Form::close() !!}

        </div>

    </div>

@endsection