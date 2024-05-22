@extends('layouts.guest')
@section('title')
    {{$content['recovery']['tab_title'] ?? 'tab_title'}}
@endsection

@section('content')
    <!-- start hero -->
    <div
        id="hero"
        class="hero jarallax"
        data-speed="0.6"
        data-img-position="50% 50%"
        style="background-image: url(/img/hero_img/2.jpg);background-color: #f18226">

        <div class="hero__inner">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-12">
                        <h4 class="hero__subtitle">VendiFill</h4>
                        <h1 class="hero__title">Account</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- start main -->
    <main role="main">
        <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="/css/style.min.css" type="text/css">

        <!-- start section -->
        <section class="section section--gray-bg">
            <div class="container">
                <div class="row">

                    <div class="col-12  d-flex justify-content-center">
                        <div style="width:50%">
                        <div class="spacer py-5 d-lg-none"></div>

                        <!-- start auth form -->
                        <form class="auth-form" action="#">
                            <h4>Password Recovery</h4>

                            <div class="input-wrp">
                                <input class="textfield" placeholder="Email" type="text" inputmode="email" x-inputmode="email"/>
                            </div>

{{--                            <div class="pt-1"><a href="javascript:void(0)">Didn’t get email?</a></div>--}}

                            <button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Submit</button>

                            <div class="text-center">Back to <a href="/login">Sign in</a></div>
                        </form>
                        <!-- end auth form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->
@stop



@extends('layouts.guest')
@section('title')
    {{$content['recovery']['tab_title'] ?? 'tab_title'}}
@endsection

@section('head')
    @include('partials.guest.head')
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
    <!-- start hero -->
    <div
        id="hero"
        class="hero jarallax"
        data-speed="0.6"
        data-img-position="50% 50%"
        style="background-image: url(/img/hero_img/2.jpg);background-color: #f18226">

        <div class="hero__inner">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-12">
                        <h4 class="hero__subtitle">VendiFill</h4>
                        <h1 class="hero__title">Account</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->
@endsection
