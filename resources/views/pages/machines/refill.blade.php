@extends('layouts.guest')
@section('title')
    {{$content['faqs']['tab_title'] ?? 'tab_title'}}
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
    <!-- start start screen -->
    {!! $content['services']['start_screen'] ?? '' !!}
    <!-- end start screen -->
    <div
        id="hero"
        class="hero jarallax"
        data-speed="0.6"
        data-img-position="50% 48%"
        style="background-image: url(/img/hero_img/1.jpg);background-position: 15% center;background-color: #2d69b9">

        <div class="hero__inner">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-12">
                        <h4 class="hero__subtitle">VendiFill</h4>
                        <h1 class="hero__title">Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->
@endsection


@section('content')
{{--    <main role="main">--}}
{{--        {!! $content['faqs']['main'] ?? '' !!}--}}
{{--    </main>--}}
    <!-- start main -->
    <main role="main">
        <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="/css/style.min.css" type="text/css">

        <!-- start section -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-lg-center">
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt">
            <!-- start promo banner -->
            <div class="promo-banner promo-banner--s1 promo-banner--with-offset">
                <div class="promo-banner__inner">
                    <div class="container">
                        <div class="row align-items-md-center">
                            <div class="col-12 col-lg-5 col-xl-8">
                                <h2 class="__title">Profit from your Venue with No Cost Up-Front?</h2>

                                <p>Start with a full vending machine service and a $500 signing bonus.</p>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="spacer py-3 py-lg-2"></div>

                                <a class="custom-btn custom-btn--big custom-btn--s5" href="javascript:void(0)">Get my Free Machine</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end promo banner -->
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section section--no-pt">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="section-heading section-heading--center">
                            <h6 class="__subtitle">Request</h6>

                            <h2 class="__title">Have any Query? Please send request</h2>
                        </div>

                        <div class="spacer py-6"></div>

                        <form class="js-contact-form" action="#">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="input-wrp">
                                        <input class="textfield" placeholder="Full name *" name="name" type="text" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-wrp">
                                        <input class="textfield" placeholder="Email *" name="email" type="text" inputmode="email" x-inputmode="email" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-wrp">
                                        <input class="textfield" placeholder="Phone" name="phone" type="text" inputmode="tel" x-inputmode="tel" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-wrp">
                                        <input class="textfield" placeholder="Subject *" name="subject" type="text" />
                                    </div>
                                </div>
                            </div>

                            <label class="input-wrp">
                                <textarea class="textfield" placeholder="Message" name="message"></textarea>
                            </label>

                            <div class="text-center">
                                <button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Send Request</button>
                            </div>

                            <div class="form__note"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->
@endsection


