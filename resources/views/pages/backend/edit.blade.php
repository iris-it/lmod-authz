@extends('layouts.full')

@section('content')

    <h1>{{__('Edit account')}}</h1>

    <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card card-default m-b-0">
            <div class="card-header" role="tab" id="headingOne">
                <h4 class="card-title">
                    <a class="collapsed accordion" data-toggle="collapse" data-parent="#accordion" href="#user" aria-expanded="false" aria-controls="user">
                        {{__('Account informations')}}
                    </a>
                </h4>
            </div>
            <div id="user" class="collapse" role="tabcard" aria-labelledby="headingOne">
                <div class="card-block">
                    @include('authz::backend.forms.user')
                </div>
            </div>
        </div>

        <div class="card card-default m-b-0">
            <div class="card-header " role="tab" id="headingTwo">
                <h4 class="card-title">
                    <a class="collapsed accordion" data-toggle="collapse" data-parent="#accordion" href="#password" aria-expanded="false" aria-controls="password">
                        {{__('Account password')}}
                    </a>
                </h4>
            </div>
            <div id="password" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                <div class="card-block">
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
