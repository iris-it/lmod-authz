@extends('layouts.full')

@section('content')

    <div class="uk-margin-top">

        <div class="uk-container uk-container-small uk-position-relative">

            <div class="uk-h1">
                {{__('Edit account')}}
            </div>

            <ul uk-accordion>
                <li class="uk-open">
                    <h3 class="uk-accordion-title">{{__('Account informations')}}</h3>
                    <div class="uk-accordion-content">
                        @include('authz::backend.forms.user')
                    </div>
                </li>
                <li class="uk-open">
                    <h3 class="uk-accordion-title">{{__('Account password')}}</h3>
                    <div class="uk-accordion-content">
                        @include('authz::backend.forms.password')
                    </div>
                </li>
            </ul>

        </div>

    </div>

@endsection