@extends('layouts.admin')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Users')}} <a href="{{route('authz.admin_create_users')}}" uk-icon="icon: plus-circle"></a>
            </div>

            <table class="uk-table uk-table-striped">
                <thead>
                <tr>
                    <th>{{__('Id')}}</th>
                    <th>{{__('Firstname')}}</th>
                    <th>{{__('Lastname')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Role')}}</th>
                    <th>{{__('Updated')}}</th>
                    <th>{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @include('authz::partials.roles_pills', ['role' => $user->role])
                        </td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                        <td>
                            @can('permission::admin-edit_users')
                                <a href="{{route('authz.admin_edit_users', $user->id)}}" uk-icon="icon: pencil"></a>
                            @endcan

                            @can('permission::admin-destroy_users')
                                <a href="{{route('authz.admin_delete_users', $user->id)}}" uk-icon="icon: trash"></a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $users->links('authz::partials.pagination')  !!}

        </div>

    </div>

@endsection