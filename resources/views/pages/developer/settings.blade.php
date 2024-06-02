@extends('layouts.web')
@section('title')
    {{$content['welcome']['tab_title'] ?? 'tab_title'}}
@endsection

@section('head')
    @include('partials.web.head')
@endsection

@section('head-css')
@endsection

@section('head-scripts')
@endsection

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('top-bar')
    @include('partials.top-bar')
@endsection

@section('side-menu')
    @include('partials.side-menu')
@endsection

@section('start-screen')
    <main role="main">
        <!-- Common styles
        ================================================== -->

        <!-- start section -->
        <section class="section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                Role related
                            </div>
                            <div class="card-body">
                                @haspermission('switch-role')
                                    <button id='toggle-role-switcher' data-value="{{$roleSwitcher ?? ""}}" type="button" class="btn btn-light btn-lg">
                                        Role switcher
                                        @if(!empty($roleSwitcher))
                                            <span class="badge badge-warning">enabled</span>
                                        @else
                                            <span class="badge badge-secondary">Disabled</span>
                                        @endif
                                    </button>
                                @endhaspermission
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->
@endsection


@section('content')


@stop

