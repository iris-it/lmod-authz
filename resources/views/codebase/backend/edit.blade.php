@extends('layouts.full')

@section('content')

    <h1>{{__('Edit account')}}</h1>

    <div id="accordion" role="tablist" aria-multiselectable="true">

        <div class="block block-themed">
            <div class="block-header">
                <a class="block-title accordion" data-toggle="collapse" data-parent="#accordion" href="#user" aria-expanded="false" aria-controls="user">
                    {{__('Account informations')}}
                </a>
            </div>
            <div id="user" class="collapse" role="tabcard" aria-labelledby="headingOne">
                <div class="block-content">
                    @include('authz::backend.forms.user')
                </div>
            </div>
        </div>

        <div class="block block-themed">
            <div class="block-header">
                <a class="block-title accordion" data-toggle="collapse" data-parent="#accordion" href="#password" aria-expanded="false" aria-controls="user">
                    {{__('Account password')}}
                </a>
            </div>
            <div id="password" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                <div class="block-content">
                    @include('authz::backend.forms.password')
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $('.accordion').click(function (e) {
            var hash = $(this).attr('href');
            location.hash = hash;
        });

        $(document).ready(function () {
            var anchor = window.location.hash;
            $(".collapse").collapse('hide');
            $(anchor).collapse('show');
        });
    </script>
@endpush
