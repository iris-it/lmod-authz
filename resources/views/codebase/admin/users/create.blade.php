@extends('layouts.full')

@section('content')

    <div class="content">

        <div class="block">

            <div class="block-header block-header-default">
                <h3 class="block-title">
                    {{__('Create user')}}
                </h3>
            </div>

            <div class="block-content">

                {!! Form::open(['route' => 'authz.admin_store_users', 'method' => 'POST']) !!}

                @include('authz::admin.users.forms.user')

                @can('permission::admin-create_users')
                    {!! Form::submit(__('Submit'), ['class' => 'btn btn-primary']) !!}
                @endcan

                {!! Form::close() !!}

            </div>

        </div>

    </div>

@endsection