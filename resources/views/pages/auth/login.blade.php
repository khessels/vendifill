@extends('layouts.guest')

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
                    <div class="col-12 d-flex justify-content-center">
                        <div style="width:50%">
                            <!-- start auth form -->
                            <form class="auth-form" action="#">
                                <h4>Sign in</h4>

                                <div class="input-wrp">
                                    <input class="textfield" placeholder="Username" type="text" />
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico fontello-eye"></i>
                                    <input class="textfield" placeholder="Password" type="text" />
                                </div>

                                <div class="row justify-content-between no-gutters pt-1">
                                    <div class="col-auto">
                                        <label class="checkfield align-bottom">
                                            <input type="checkbox" checked="">
                                            <i></i>
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="col-auto">
                                        <a class="__link" href="/recovery">I forgot my password</a>
                                    </div>
                                </div>

                                <button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Sign in</button>

                                <div class="text-center"><a href="/signup">Sign up</a> if you don’t have an account</div>
                            </form>

                        </div>
                        <!-- end auth form -->
                    </div>

{{--                    <div class="col-12 col-md-6 col-lg-4">--}}
{{--                        <div class="spacer py-5 d-md-none"></div>--}}

{{--                        <!-- start auth form -->--}}
{{--                        <form class="auth-form" action="#">--}}
{{--                            <h4>Sign up</h4>--}}

{{--                            <div class="input-wrp">--}}
{{--                                <input class="textfield" placeholder="Username" type="text" />--}}
{{--                            </div>--}}

{{--                            <div class="input-wrp">--}}
{{--                                <input class="textfield" placeholder="Email" type="text" inputmode="email" x-inputmode="email"/>--}}
{{--                            </div>--}}

{{--                            <div class="input-wrp">--}}
{{--                                <i class="textfield-ico fontello-eye"></i>--}}
{{--                                <input class="textfield" placeholder="Password" type="text" />--}}
{{--                            </div>--}}

{{--                            <div class="input-wrp">--}}
{{--                                <i class="textfield-ico fontello-eye"></i>--}}
{{--                                <input class="textfield" placeholder="Confirm Password" type="text" />--}}
{{--                            </div>--}}

{{--                            <div class="pt-1">I agree with <a href="javascript:void(0)">Term of Services</a></div>--}}

{{--                            <button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Sign up</button>--}}

{{--                            <div class="text-center"><a href="javascript:void(0)">Sign in</a> if you an account</div>--}}
{{--                        </form>--}}
{{--                        <!-- end auth form -->--}}

{{--                    </div>--}}

{{--                    <div class="col-12 col-md-6 col-lg-4">--}}
{{--                        <div class="spacer py-5 d-lg-none"></div>--}}

{{--                        <!-- start auth form -->--}}
{{--                        <form class="auth-form" action="#">--}}
{{--                            <h4>Password Recovery</h4>--}}

{{--                            <div class="input-wrp">--}}
{{--                                <input class="textfield" placeholder="Email" type="text" inputmode="email" x-inputmode="email"/>--}}
{{--                            </div>--}}

{{--                            <div class="pt-1"><a href="javascript:void(0)">Didn’t get email?</a></div>--}}

{{--                            <button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Submit</button>--}}

{{--                            <div class="text-center">Back to <a href="javascript:void(0)">Sign in</a></div>--}}
{{--                        </form>--}}
{{--                        <!-- end auth form -->--}}

{{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->
@stop
