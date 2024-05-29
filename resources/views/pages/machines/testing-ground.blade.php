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

@endsection


@section('content')
    <main role="main">
        <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="/css/style.min.css" type="text/css">

        <!-- start section -->
        <section class="section ">
            <div class="container">
                <div class="row">
                    <div class="col-6-md">Testing </div>
                    <div class="col-6-md"> ground</div>
                </div>
            </div>
        </section>
    </main>

@stop

@section('footer')
{{--    @include('partials.footer')--}}
@stop
