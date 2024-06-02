@extends('layouts.guest')
@section('title')
    {{$content[$page]['tab_title'] ?? 'tab_title'}}
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
{{--    {!! $content[$page]['start_screen'] ?? '' !!}--}}
@endsection

@section('content')
{{--    {!! $content[$page]['main'] ?? '' !!}--}}
    <main role="main">
        <!-- start section -->
        <section class="section section--gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div style="width:50%">
                            <!-- start auth form -->
                            <form class="auth-form" action="/login" method="POST">
                                @csrf
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

                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
@stop

@section('footer')
    @include('partials.footer')
@stop

