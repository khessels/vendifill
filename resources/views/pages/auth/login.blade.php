@extends('layouts.guest')
@section('title')
    @c(['key' => 'title', 'page' => $page])
@endsection

@section('head')
    @include('partials.guest.head')
@endsection

@section('head-css')
@endsection

@section('head-scripts')
@endsection

@section('top-bar')
    @include('partials.top-bar')
@endsection

@section('side-menu')
    @include('partials.side-menu')
@endsection

@section('hero')
    @c(['key' => 'hero', 'page' => $page, 'mimetype' => 'text/html', 'default' => '' ])
@endsection

@section('content')
{{--    {!! $content[$page]['main'] ?? '' !!}--}}
    <main role="main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div style="width:50%">
                            <!-- start auth form -->
                            <form class="auth-form" action="/login" method="POST">
                                @csrf
                                <h4>@c(['key' => 'signin'])</h4>

                                <div class="input-wrp">
                                    <input name='email' class="textfield"
                                           placeholder="@c(['key' => 'email'])" type="text"/>
                                </div>

                                <div class="input-wrp">
                                    <i class="textfield-ico fontello-eye"></i>
                                    <input name="password" class="textfield"
                                           placeholder="@c(['key' => 'password'])"
                                           type="password"/>
                                </div>

                                <div class="row justify-content-between no-gutters pt-1">
                                    <div class="col-auto">
                                        <label class="checkfield align-bottom">
                                            <input type="checkbox" checked="">
                                            <i></i>
                                            @c(['key' => 'remember_me'])
                                        </label>
                                    </div>

                                    <div class="col-auto">
                                        <a class="__link"
                                           href="/recovery">{{$content['login']['forgot_password'] ?? 'forgot_password'}}</a>
                                    </div>
                                </div>

                                <button class="custom-btn custom-btn--big custom-btn--s3" type="submit"
                                        role="button">@c(['key' => 'btn_signin'])</button>

                                <div class="text-center"><a
                                        href="/signup">@c(['key' => 'signup'])</a> @c(['key' => 'signin.postfix'])
                                </div>
                            </form>

                        </div>
                        <!-- end auth form -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop

@section('footer')
    @include('partials.footer')
@stop

