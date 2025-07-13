@extends('layouts.guest')

@section('title')
     @c(['mimetype' => 'text/plain', 'key' => 'title', 'page' => $page, 'editable'=> false])
@endsection

@section('head')
    @include('partials.guest.head')
@endsection

@section('head-css')
@endsection

@section('head-scripts')
@endsection
@section('body')
    <body class="page-home page-home-1">
    <div id="app">
@endsection
@section('top-bar')
    @include('partials.top-bar')
@endsection

@section('side-menu')
    @include('partials.side-menu')
@endsection

@section('hero')
    @c(['mimetype' => 'text/html', 'editable' => true, 'key' => 'hero', 'page' => $page, 'default' => '
        <main role="main" class="hero hero--s1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="hero-content">
                            <h1 class="__title">VendiFill Machines</h1>
                            <p class="__subtitle">The Best Vending Machines for Your Business</p>
                            <p> tralalalala</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-none d-sm-block">
                        <div class="hero-img">
                            <img class="lazy" src="/img/blank.gif" data-src="/img/img_1.png" alt="VendiFill Machines" width="719" height="741">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    '])
@endsection

@section('content')
    @c(['editable' => true,  'key' => 'content', 'page' => $page, 'default' => '
        <main role="main">
            <section class="section section--about">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="section-heading section-heading--left">
                                <h5 class="__subtitle">About</h5>

                                <h2 class="__title">VendiFill Machines <br> <span>in&nbsp;Our Business</span></h2>
                            </div>

                            <div class="spacer py-3"></div>

                            <div class="content-container">
                                <p>
                                    <strong>Zebra tilapia ocean perch ocean sunfish bichir. Monkfish eel soapfish sabertooth fish whiptail gulper long-finned char hussar. Platyfish eelpout, blue danio Alaska blackfish dhufish sheepshead minnow warty angler ghost fish bamboo shark</strong>
                                </p>

                                <p>
                                    Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth tetra barreleye springfish chubsucker Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish.
                                </p>

                                <div class="spacer"></div>

                                <p>
                                    <a class="custom-btn custom-btn--big custom-btn--s1" href="javascript:void(0)">More About</a>
                                </p>

                                <div class="spacer py-2"></div>

                                <!-- start counter -->
                                <div class="counter counter--s1">
                                    <div class="__inner">
                                        <div class="row">
                                            <!-- start item -->
                                            <div class="col-12 col-md-auto">
                                                <div class="__item">
                                                    <div class="__content">
                                                        <div class="__count js-count" data-from="0" data-to="2000">0</div>

                                                        <h4 class="__title">Machines installed</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end item -->

                                            <!-- start item -->
                                            <div class="col-12 col-md-auto">
                                                <div class="__item">
                                                    <div class="__content">
                                                        <div class="__count js-count" data-from="0" data-to="500" data-after-text="+">0</div>

                                                        <h4 class="__title">Partners in the World</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end counter -->
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="spacer py-4 py-md-6 d-lg-none"></div>

                            <div class="about-img text-right">
                                <img class="lazy" width="719" height="741" src="/img/blank.gif" data-src="/img/about_img.png" alt="demo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    '])
@endsection

@section('footer')
    @include('partials.footer')
@endsection

