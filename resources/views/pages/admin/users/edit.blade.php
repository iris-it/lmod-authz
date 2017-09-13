@extends('layouts.full')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Edit user')}}
            </div>

            {!! Form::model($user, ['route' => ['authz.admin_update_users', $user->id], 'method' => 'PUT', 'class'=> 'uk-form-stacked']) !!}

            @include('authz::admin.users.forms.user')

            {!! Form::close() !!}

        </div>

    </div>

@endsection