@extends('layouts.full')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Create role')}}
            </div>

            {!! Form::open(['route' => 'authz.admin_store_roles', 'method' => 'POST', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.roles.forms.role')

            {!! Form::submit(__('Submit'), ['class' => 'uk-button uk-button-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>

@endsection