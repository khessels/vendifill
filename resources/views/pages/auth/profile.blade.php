@extends('layouts.web')
@section('title')
    {{$content['login']['tab_title'] ?? 'tab_title'}}
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
    {{--    {!! $content['profile']['start_screen'] ?? '' !!}--}}
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
                        <h4 class="hero__subtitle">{{$content['login']['title'] ?? 'title'}}</h4>
                        <h1 class="hero__title">{{$content['login']['header'] ?? 'header'}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->
@endsection



@section('content')
{{--    <main role="main">--}}
    {{--    {!! $content['profile']['main'] ?? '' !!}--}}
{{--    </main>--}}
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
                            <form class="auth-form" action="/api/v1/login" method="POST">
                                <h4>{{$content['login']['sign_in'] ?? 'sign_in'}}</h4>

                                <div class="input-wrp">
                                    <input name='email' class="textfield"
                                           placeholder="{{$content['login']['email'] ?? 'email'}}" type="text"/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico fontello-eye"></i>
                                    <input name="password" class="textfield"
                                           placeholder="{{$content['login']['password'] ?? 'password'}}"
                                           type="password"/>
                                </div>

                                <div class="row justify-content-between no-gutters pt-1">
                                    <div class="col-auto">
                                        <label class="checkfield align-bottom">
                                            <input type="checkbox" checked="">
                                            <i></i>
                                            {{$content['login']['remember_me'] ?? 'remember_me'}}
                                        </label>
                                    </div>

                                    <div class="col-auto">
                                        <a class="__link"
                                           href="/recovery">{{$content['login']['forgot_password'] ?? 'forgot_password'}}</a>
                                    </div>
                                </div>

                                <button class="custom-btn custom-btn--big custom-btn--s3" type="submit"
                                        role="button">{{$content['login']['btn_sign_in'] ?? 'btn_sign_in'}}</button>

                                <div class="text-center"><a
                                        href="/signup">{{$content['login']['link_sign_up'] ?? 'link_sign_up'}}</a> {{$content['login']['sign_up_postfix'] ?? 'sign_up_postfix'}}
                                </div>
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
