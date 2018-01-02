@extends('layouts.full')

@section('content')
    <div class="content">

        <div class="block">

            <div class="block-header block-header-default">
                <h3 class="block-title">{{__('Users')}}</h3>
                <div class="block-options">
                    @can('permission::admin-create_users')
                        <div class="block-options-item">
                            <a href="{{route('authz.admin_create_users')}}">
                                {{__('Add user')}} <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    @endcan
                </div>
            </div>

            <div class="block-content">
                <table class="table table-hover table-vcenter">
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
                                <div class="btn-group">
                                    @can('permission::admin-edit_users')
                                        <a href="{{route('authz.admin_edit_users', $user->id)}}" class="btn btn-primary">
                                            {{__('Edit user')}} <i class="fa fa-pencil"></i>
                                        </a>
                                    @endcan
                                    @can('permission::admin-destroy_users')
                                        <a href="{{route('authz.admin_delete_users', $user->id)}}" class="btn btn-warning">
                                            {{__('Delete user')}} <i class="fa fa-trash"></i>
                                        </a>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $users->links('authz::partials.pagination')  !!}

            </div>
        </div>
    </div>

@endsection