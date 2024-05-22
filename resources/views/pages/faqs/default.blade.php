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
    {!! $content['faqs']['start_screen'] ?? '' !!}
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
                        <h1 class="hero__title">FAQ</h1>
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
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="section-heading">
                            <h5 class="__subtitle">Popular questions</h5>

                            <h2 class="__title">Got stuck? Try to find a solution here.</h2>
                        </div>

                        <div class="spacer py-3"></div>

                        <div class="content-container">
                            <!-- start FAQ -->
                            <div class="faq">
                                <!-- start accordion -->
                                <div class="accordion-container" data-type="accordion">
                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="accordion-title">What is the best Vending Machine?</h4>

                                            <i></i>
                                        </div>

                                        <article class="accordion-content">
                                            <div class="accordion-content__inner">
                                                <p>
                                                    On the other hand, the strengthening and development of the structure largely determines the creation of substantial financial and administrative conditions. Equally, the beginning of the daily work on the formation of the position provides a wide range of (specialists) participation in the formation of participatory systems. Substantial financial and administrative conditions.
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="accordion-title">I've never flown a snack machine before, which device should I buy?</h4>

                                            <i></i>
                                        </div>

                                        <article class="accordion-content">
                                            <div class="accordion-content__inner">
                                                <p>
                                                    JavaScript is also used in environments that aren’t web-based, such as PDF documents, site-specific browsers, and desktop widgets. Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers per
                                                </p>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quas molestias aut dolore fugiat at, neque aliquam nesciunt dolor! Molestiae sunt magnam asperiores, quasi blanditiis iste doloremque odit qui! Neque?
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="accordion-title">Profit from your Venue with No Cost Up-Front?</h4>

                                            <i></i>
                                        </div>

                                        <article class="accordion-content">
                                            <div class="accordion-content__inner">
                                                <p>
                                                    JavaScript is also used in environments that aren’t web-based, such as PDF documents, site-specific browsers, and desktop widgets. Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers per
                                                </p>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quas molestias aut dolore fugiat at, neque aliquam nesciunt dolor! Molestiae sunt magnam asperiores, quasi blanditiis iste doloremque odit qui! Neque?
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="accordion-title">Get $500 Signing Bonus + Free Vending Machine?</h4>

                                            <i></i>
                                        </div>

                                        <article class="accordion-content">
                                            <div class="accordion-content__inner">
                                                <p>
                                                    JavaScript is also used in environments that aren’t web-based, such as PDF documents, site-specific browsers, and desktop widgets. Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers per
                                                </p>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quas molestias aut dolore fugiat at, neque aliquam nesciunt dolor! Molestiae sunt magnam asperiores, quasi blanditiis iste doloremque odit qui! Neque?
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="accordion-item">
                                        <div class="accordion-toggler">
                                            <h4 class="accordion-title">How to use snack machine ?</h4>

                                            <i></i>
                                        </div>

                                        <article class="accordion-content">
                                            <div class="accordion-content__inner">
                                                <p>
                                                    JavaScript is also used in environments that aren’t web-based, such as PDF documents, site-specific browsers, and desktop widgets. Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On the client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers per
                                                </p>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quas molestias aut dolore fugiat at, neque aliquam nesciunt dolor! Molestiae sunt magnam asperiores, quasi blanditiis iste doloremque odit qui! Neque?
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- end item -->
                                </div>
                                <!-- end accordion -->
                            </div>
                            <!-- end FAQ -->
                        </div>
                    </div>
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
@stop
