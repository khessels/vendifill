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
@section('body')
    <body class="page-home page-home-1">
    <div id="app">
@endsection

@section('hero')
@endsection

@section('content')
            <main role="main">

                @c(['key' => 'section_3', 'page' => $page, 'mimetype' => 'text/html', 'default' => '
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-lg-center">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="section-heading section-heading--center">
                                        <h2 class="__title">You got a quesion, we are happy to talk to you! </h2>
                                        <p class="">(If we dont answer within 24 hours, please do not hesitate to give us a call.)</p>
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

                                        <button class="custom-btn custom-btn--big custom-btn--s3" type="submit" role="button">Send Message</button>

                                        <div class="form__note"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                '])

                @c(['key' => 'section_1', 'page' => $page, 'mimetype' => 'text/html', 'default' => '
                    <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">


                                <div class="company-contacts">
                                    <div class="__inner">
                                        <div class="row">

                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <div class="__item">
                                                    <div class="d-table">
                                                        <div class="d-table-cell align-top">
                                                            <i class="__ico fontello-location-outline"></i>
                                                        </div>

                                                        <div class="d-table-cell align-top">
                                                            <h4 class="__title">Location</h4>

                                                            <div>
                                                                5272 Lyngate Ct Burke,<br>VA 2015-1688
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end item -->

                                            <!-- start item -->
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <div class="__item">
                                                    <div class="d-table">
                                                        <div class="d-table-cell align-top">
                                                            <i class="__ico fontello-phone"></i>
                                                        </div>

                                                        <div class="d-table-cell align-top">
                                                            <h4 class="__title">Phone</h4>

                                                            <div>
                                                                +1 998 150 30 20<br>+31 85 964 47 25
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end item -->

                                            <!-- start item -->
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <div class="__item">
                                                    <div class="d-table">
                                                        <div class="d-table-cell align-top">
                                                            <i class="__ico fontello-envelope"></i>
                                                        </div>

                                                        <div class="d-table-cell align-top">
                                                            <h4 class="__title">Email</h4>

                                                            <div>
                                                                <a href="mailto:info@vendgo.co">info@vendgo.co</a><br>
                                                                <a href="mailto:support@vendgo.co">support@vendgo.co</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end item -->

                                            <!-- start item -->
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <div class="__item">
                                                    <div class="d-table">
                                                        <div class="d-table-cell align-top">
                                                            <i class="__ico fontello-share"></i>
                                                        </div>

                                                        <div class="d-table-cell align-top">
                                                            <h4 class="__title">Social</h4>

                                                            <!-- start social buttons -->
                                                            <div class="s-btns s-btns--gray">
                                                                <ul class="d-flex flex-row flex-wrap align-items-center">
                                                                    <li><a class="f" href="#"><i class="fontello-facebook"></i></a></li>
                                                                    <li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
                                                                    <li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
                                                                    <li><a class="i" href="#"><i class="fontello-instagram"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end social buttons -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end company contacts -->

                            </div>
                        </div>
                    </div>
                </section>'])

                @c(['key' => 'section_2', 'page' => $page, 'mimetype' => 'text/html', 'default' => '
                    <section class="section section--no-pt section--no-pb">
                        <!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
                        <div class="g_map" data-api-key="AIzaSyDKAsaW_3chQ-leWi7O8700PGgybVaSAbQ" data-longitude="-84.16065" data-latitude="9.930041" data-marker="img/marker.png" style="min-height: 455px"></div>
                    </section>'])

            </main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

