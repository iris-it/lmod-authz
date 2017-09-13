@extends('layouts.full')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Create user')}}
            </div>

            {!! Form::open(['route' => 'authz.admin_store_users', 'method' => 'POST', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.users.forms.user')

            {!! Form::close() !!}

        </div>

    </div>

@endsection