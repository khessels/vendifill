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


@section('top-bar')
    @include('partials.top-bar')
@endsection

@section('side-menu')
    @include('partials.side-menu')
@endsection

@section('hero')
{{--    {!! $content[$page]['start_screen'] ?? '' !!}--}}
@endsection
@section('body')
    <body class="page-home page-home-1">
    <div id="app">
@endsection
@section('content')
            <main role="main">
                <!-- Common styles
                ================================================== -->
                <link rel="stylesheet" href="css/style.min.css" type="text/css">

{{--                <!-- start section -->--}}
{{--                <section class="section">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-md-8 col-lg-4">--}}
{{--                                <div class="section-heading section-heading--left">--}}
{{--                                    <h5 class="__subtitle">Pricing Plan</h5>--}}

{{--                                    <h2 class="__title">Pick the right pricing plan for your needs</h2>--}}

{{--                                    <p>--}}
{{--                                        Redfin perch rock beauty snake mudhead boafish rock bass pompano dolphinfish onecat beachsal.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12 col-lg-8">--}}

{{--                                <div class="spacer py-5 d-lg-none"></div>--}}

{{--                                <div class="content-container">--}}
{{--                                    <!-- start pricing table -->--}}
{{--                                    <div class="pricing-table pricing-table--s1">--}}
{{--                                        <div class="__inner">--}}
{{--                                            <div class="row justify-content-sm-center">--}}
{{--                                                <!-- start item -->--}}
{{--                                                <div class="col-12 col-sm-8 col-md-6 d-sm-flex">--}}
{{--                                                    <div class="__item __item--shadow">--}}
{{--                                                        <div class="__header">--}}
{{--                                                            <div class="__title h4">Add Ingredients</div>--}}

{{--                                                            <div class="__price">Free</div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__body  py-8">--}}
{{--                                                            <ul class="__desc-list">--}}
{{--                                                                <li><i class="fontello-ok"></i>Prepare for Installation</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Canthigaster rostrata</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Spikefish brown trout </li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Loach summer flounder </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__footer">--}}
{{--                                                            <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- end item -->--}}

{{--                                                <!-- start item -->--}}
{{--                                                <div class="col-12 col-sm-8 col-md-6 d-sm-flex">--}}
{{--                                                    <div class="__item __item--shadow __item--active">--}}
{{--                                                        <div class="__header">--}}
{{--                                                            <div class="__title h4">Machine Installation</div>--}}

{{--                                                            <div class="__price">$ 630</div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__body  py-8">--}}
{{--                                                            <ul class="__desc-list">--}}
{{--                                                                <li><i class="fontello-ok"></i>Prepare for Installation</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Canthigaster rostrata</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Spikefish brown trout </li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Loach summer flounder </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__footer">--}}
{{--                                                            <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- end item -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- end pricing table -->--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--                <!-- end section -->--}}

                <!-- start section -->
                <section class="section section--no-pb section--bg-img jarallax" data-speed="0.3" data-img-position="50% 50%" style="background-image: url(img/promo_banner_2_bg.jpg);">
                    <div class="container">
                        <div class="row">
                            @c(['key' => 'title', 'page' => $page, 'editable'=> true, 'default' => '
                                <div class="col-12">
                                    <div class="section-heading section-heading--white section-heading--center">
                                        <h5 class="__subtitle">Signup</h5>
                                        <h2 class="__title">Sign up Services</h2>
                                        <p>
                                            We provide several services for you.
                                        </p>
                                    </div>
                                    <div class="spacer py-6"></div>
                                </div>'])

                            <div class="col-12">

                                <div class="content-container">
                                    <!-- start pricing table -->
                                    <div class="pricing-table pricing-table--s2">
                                        <div class="__inner">
                                            <div class="row no-gutters justify-content-sm-center justify-content-md-start">
                                                <!-- start item -->
                                                @c(['key' => 'service_1', 'page' => $page, 'editable'=> true, 'default' => '
                                                    <div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
                                                        <div class="__item">
                                                            <div class="__header">
                                                                <div class="__title h4">Provide a service to your customers</div>

                                                                <div class="__price">Vending machines</div>
                                                            </div>

                                                            <div class="__body  pt-8 pb-9">
                                                                <ul class="__desc-list">
                                                                    <li><i class="fontello-ok"></i>A choice of food and beverage machines</li>
                                                                    <li><i class="fontello-ok"></i>Coffee vending machines</li>
                                                                    <li><i class="fontello-ok"></i>Provide additional discounts to your top customers</li>
                                                                    <li><i class="fontello-ok"></i>Always filled</li>
                                                                </ul>
                                                            </div>

                                                            <div class="__footer">
                                                                <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>
                                                            </div>
                                                        </div>
                                                    </div>'])
                                                <!-- end item -->

                                                <!-- start item -->
                                                @c(['key' => 'service_2', 'page' => $page, 'editable'=> true, 'default' => '
                                                    <div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
                                                        <div class="__item">
                                                            <div class="__header">
                                                                <div class="__title h4">(Contactless) payments</div>

                                                                <div class="__price">Payments</div>
                                                            </div>

                                                            <div class="__body  pt-8 pb-9">
                                                                <ul class="__desc-list">
                                                                    <li><i class="fontello-ok"></i>Sinpe</li>
                                                                    <li><i class="fontello-ok"></i>Company cards</li>
                                                                    <li><i class="fontello-ok"></i>Company\Employee wallet solutions</li>
                                                                    <li><i class="fontello-ok"></i>Apple pay, Google pay</li>
                                                                    <li><i class="fontello-ok"></i>Cash</li>
                                                                    <li><i class="fontello-ok"></i>Always integration of the newest technologie</li>
                                                                    <li><i class="fontello-ok"></i>Lowest transaction fees in Costa Rica</li>
                                                                </ul>
                                                            </div>

                                                            <div class="__footer">
                                                                <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>
                                                            </div>
                                                        </div>
                                                    </div>'])
                                                <!-- end item -->

                                                <!-- start item -->
                                                @c(['key' => 'service_3', 'page' => $page, 'editable'=> true, 'default' => '
                                                    <div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
                                                        <div class="__item">
                                                            <div class="__header">
                                                                <span class="__label"><i class="fontello-star"></i></span>

                                                                <div class="__title h4">Refill \ Cleaning services</div>

                                                                <div class="__price">RC Services</div>
                                                            </div>

                                                            <div class="__body  pt-8 pb-9">
                                                                <ul class="__desc-list">
                                                                    <li><i class="fontello-ok"></i>Lower your opperational costs</li>
                                                                    <li><i class="fontello-ok"></i>Connect to our refill service</li>
                                                                    <li><i class="fontello-ok"></i>Cleaning services</li>
    {{--                                                                <li><i class="fontello-ok"></i>Loach summer flounder </li>--}}
                                                                </ul>
                                                            </div>

                                                            <div class="__footer">
                                                                <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>
                                                            </div>
                                                        </div>
                                                    </div>'])
                                                <!-- end item -->

                                                <!-- start item -->
                                                @c(['key' => 'service_4', 'page' => $page, 'editable'=> true, 'default' => '
                                                    <div class="col-12 col-sm-9 col-md-6 col-lg-3 d-sm-flex">
                                                        <div class="__item">
                                                            <div class="__header">
                                                                <div class="__title h4">Earn money refering potential customers</div>

                                                                <div class="__price">Referer</div>
                                                            </div>

                                                            <div class="__body  pt-8 pb-9">
                                                                <ul class="__desc-list">
                                                                    <li><i class="fontello-ok"></i>Earn a minimum of 50$ per machine</li>
                                                                    <li><i class="fontello-ok"></i>Earn more with large customers</li>
                                                                    <li><i class="fontello-ok"></i>Just send location and photos</li>
{{--                                                                    <li><i class="fontello-ok"></i>Loach summer flounder </li>--}}
                                                                </ul>
                                                            </div>

                                                            <div class="__footer">
                                                                <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>
                                                            </div>
                                                        </div>
                                                    </div>'])
                                                <!-- end item -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end pricing table -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="200" viewBox="0 0 1920 400" preserveAspectRatio="none" style="min-height: 180px">
                            <path fill="#fff" fill-rule="evenodd" d="M-3-3h1925v403H-3z" style="mix-blend-mode:screen"/>
                        </svg>
                    </div>
                </section>
                <!-- end section -->

                <!-- start section -->
{{--                <section class="section">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="section-heading section-heading--center">--}}
{{--                                    <h5 class="__subtitle">Services</h5>--}}

{{--                                    <h2 class="__title">Pick the right pricing plan for your needs</span></h2>--}}

{{--                                    <p>--}}
{{--                                        Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South<br>American Lungfish. Reef triggerfish dogteeth--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="spacer py-6"></div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}

{{--                                <div class="content-container">--}}
{{--                                    <!-- start pricing table -->--}}
{{--                                    <div class="pricing-table pricing-table--s1">--}}
{{--                                        <div class="__inner">--}}
{{--                                            <div class="row justify-content-sm-center justify-content-md-start">--}}
{{--                                                <!-- start item -->--}}
{{--                                                <div class="col-12 col-sm-9 col-md-6 col-lg-4 d-sm-flex">--}}
{{--                                                    <div class="__item __item--bordered">--}}
{{--                                                        <div class="__header">--}}
{{--                                                            <div class="__title h4">Add Ingredients</div>--}}

{{--                                                            <div class="__price">Free</div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__body  py-8">--}}
{{--                                                            <ul class="__desc-list">--}}
{{--                                                                <li><i class="fontello-ok"></i>Prepare for Installation</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Canthigaster rostrata</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Spikefish brown trout</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Loach summer flounder</li>--}}
{{--                                                                <li class="disabled">European minnow black</li>--}}
{{--                                                                <li class="disabled">Dragonfish orbicular</li>--}}
{{--                                                                <li class="disabled">Batfish stingray tenpoun</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__footer">--}}
{{--                                                            <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- end item -->--}}

{{--                                                <!-- start item -->--}}
{{--                                                <div class="col-12 col-sm-9 col-md-6 col-lg-4 d-sm-flex">--}}
{{--                                                    <div class="__item __item--bordered __item--active">--}}
{{--                                                        <div class="__header">--}}
{{--                                                            <div class="__title h4">Machine Installation</div>--}}

{{--                                                            <div class="__price">$ 630</div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__body  py-8">--}}
{{--                                                            <ul class="__desc-list">--}}
{{--                                                                <li><i class="fontello-ok"></i>Prepare for Installation</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Canthigaster rostrata</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Spikefish brown trout</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Loach summer flounder</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>European minnow black</li>--}}
{{--                                                                <li class="disabled">Dragonfish orbicular</li>--}}
{{--                                                                <li class="disabled">Batfish stingray tenpoun</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__footer">--}}
{{--                                                            <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- end item -->--}}

{{--                                                <!-- start item -->--}}
{{--                                                <div class="col-12 col-sm-9 col-md-6 col-lg-4 d-sm-flex">--}}
{{--                                                    <div class="__item __item--bordered">--}}
{{--                                                        <div class="__header">--}}
{{--                                                            <div class="__title h4">Unlimited</div>--}}

{{--                                                            <div class="__price">999$</div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__body  py-8">--}}
{{--                                                            <ul class="__desc-list">--}}
{{--                                                                <li><i class="fontello-ok"></i>Prepare for Installation</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Canthigaster rostrata</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Spikefish brown trout</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Loach summer flounder</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>European minnow black</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Dragonfish orbicular</li>--}}
{{--                                                                <li><i class="fontello-ok"></i>Batfish stingray tenpoun</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="__footer">--}}
{{--                                                            <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- end item -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- end pricing table -->--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
                <!-- end section -->

                <!-- start section -->
{{--                <section class="section section--no-pt">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="section-heading">--}}
{{--                                    <h5 class="__subtitle">Pricing tables of Services</h5>--}}

{{--                                    <h2 class="__title">Pricng Plan for Main Services</h2>--}}
{{--                                </div>--}}

{{--                                <div class="spacer py-6"></div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}

{{--                                <div class="content-container">--}}
{{--                                    <!-- start pricing table -->--}}
{{--                                    <div class="pricing-table pricing-table--s3">--}}
{{--                                        <table>--}}
{{--                                            <tbody>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <div class="__title h4">Machine Delivery & Installation</div>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <p>--}}
{{--                                                        Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish--}}
{{--                                                    </p>--}}
{{--                                                </td>--}}

{{--                                                <td width="13%">--}}
{{--                                                    <div class="__price">$ 585</div>--}}
{{--                                                </td>--}}

{{--                                                <td width="1%">--}}
{{--                                                    <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}

{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <div class="__title h4">Ingredients Delivery & Add to Machine</div>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <p>--}}
{{--                                                        Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish--}}
{{--                                                    </p>--}}
{{--                                                </td>--}}

{{--                                                <td width="13%">--}}
{{--                                                    <div class="__price">$ 360</div>--}}
{{--                                                </td>--}}

{{--                                                <td width="1%">--}}
{{--                                                    <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}

{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <div class="__title h4">Support 24/7</div>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <p>--}}
{{--                                                        Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish--}}
{{--                                                    </p>--}}
{{--                                                </td>--}}

{{--                                                <td width="13%">--}}
{{--                                                    <div class="__price">$ 150</div>--}}
{{--                                                </td>--}}

{{--                                                <td width="1%">--}}
{{--                                                    <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}

{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <div class="__title h4">Repair & Service</div>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <p>--}}
{{--                                                        Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish--}}
{{--                                                    </p>--}}
{{--                                                </td>--}}

{{--                                                <td width="13%">--}}
{{--                                                    <div class="__price">$ 810</div>--}}
{{--                                                </td>--}}

{{--                                                <td width="1%">--}}
{{--                                                    <a class="custom-btn custom-btn--medium custom-btn--s1" href="#">Get Started</a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                    <!-- end pricing table -->--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
                <!-- end section -->
            </main>
{{--    <main role="main">--}}
{{--        <section class="section" style="min-height: 280px;">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-md-3">--}}
{{--                        <div class="card" style="font-size:150%">--}}
{{--                            <img src="/img/gallery_img/9.jpg" class="card-img-top" alt="...">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Sign up for location bonuses.</h5>--}}
{{--                                <p class="card-text">You can give us a location that has no vending machines but would be a great place to have one</p>--}}
{{--                                <p class="card-text">If VendiFill comes to an agreement with the location manager, we pay you a $50 finders fee.</p>--}}
{{--                                <p class="card-text">Of course, there are some rules but basically it has to be save for our machines and generate income.</p>--}}
{{--                                <a href="/signup/location-bonus" class="btn btn-primary btn-lg">Interested ? Click here!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="card" style="font-size:150%">--}}
{{--                            <img src="/img/products-cards_img/1.jpg" class="card-img-top" alt="...">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">You manage a location and are interested in our services.</h5>--}}
{{--                                <p class="card-text">If you meet the requirements, we will place a machine at your location to offer our services to your customers\employees free of charge.</p>--}}
{{--                                <p class="card-text">Our refill services assures your machines are always stocked with the most wanted products for your location.</p>--}}
{{--                                <form action="/signup" method="post">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="company_name" class="form-label">Company name</label>--}}
{{--                                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Your Company">--}}
{{--                                            </div>--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="company_size" class="form-label">Company size</label>--}}
{{--                                                <input type="number" class="form-control" id="company_size" name="company_size" placeholder="Number of Employees">--}}
{{--                                            </div>--}}
{{--                                            <p class="card-text">In order to understand the profitability of your location we need to know how many people pass the location (on a daily base) you want us to place the machine(s).</p>--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="people_passing_daily" class="form-label">Daily Number of people passing the location</label>--}}
{{--                                                <input type="number" class="form-control" id="people_passing_daily" name="people_passing_daily" placeholder="Daily Number of People passing">--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="contact_name" class="form-label">Your name</label>--}}
{{--                                                <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Your Name">--}}
{{--                                            </div>--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="contact_details" class="form-label">Contact details</label>--}}
{{--                                                <textarea class="form-control" id="contact_details" name="contact_details" placeholder="How can we contact you?">--}}
{{--                                                </textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="message" class="form-label">Your Message</label>--}}
{{--                                                <textarea rows="5" class="form-control" id="message" name="message" placeholder="Your message">--}}
{{--                                                </textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-3">--}}
{{--                                                <button type="submit" class="btn-primary btn btn-lg">Submit</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </main>--}}
@stop

@section('footer')
    @include('partials.footer')
@stop

