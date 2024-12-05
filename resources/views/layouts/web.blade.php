<!DOCTYPE html>
<html class="no-js"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title') | {{ config('app.name', 'tab_title') }}</title>

    @yield('head')

{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}


    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/js/aos/aos.css" type="text/css">
{{--    <link rel="stylesheet" href="/js/jarallax/jaralax.css" type="text/css">--}}
    <link rel="stylesheet" href="/js/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css">
    <link rel="stylesheet" href="/js/nice-select/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/js/ion.rangeSlider/css/ion.rangeSlider.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

    <link rel="stylesheet" href="/css/style.min.css" type="text/css">

    @yield('head_scripts')
</head>
{{--    <body class="page-home page-home-2">--}}
<body class="page-contact">
<div id="app">
    <!-- start header -->
    @yield('top-bar')
    <!-- end header -->

    <!-- start side menu -->
    @yield('side-menu')
    <!-- end side menu -->

    <!-- start screen -->
    @yield('hero')
    <!-- end side menu -->

    <!-- start main -->
{{--    <link rel="stylesheet" href="/css/style.min.css" type="text/css">--}}

    <style>
        html {
            font-size: 10px;
        }
        body {
            font-size: 18px;
        }
    </style>
    @yield('content')


    <!-- start footer -->
    @yield('footer')

    <!-- end footer -->
</div>
<div id="btn-to-top-wrap" class="compensate-for-scrollbar">
    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
</div>
<script>
    (function (w, d) {
        var b = d.getElementsByTagName('body')[0],
            s = d.createElement("script"),
            v = !("IntersectionObserver" in w) ? "8.17.0" : "12.3.0",
            o = {
                elements_selector: ".lazy",
                threshold: 500,
                callback_enter: function (element) {

                },
                callback_set: function (element) {

                    oTimeout = setTimeout(function () {
                        clearTimeout(oTimeout);

                        AOS.refresh();
                    }, 1000);
                },
                callback_loaded: function (element) {

                },
                callback_error: function (element) {
                    element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
                }
            };
        s.type = 'text/javascript';
        s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
        s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
        b.appendChild(s);
        w.lazyLoadOptions = o;

        w.addEventListener('LazyLoad::Initialized', function (event) {
            w.lazyLoadInstance = event.detail.instance;
        }, false);
    }(window, document));
</script>

<script type="text/javascript" src="/js/main.js"></script>
</body>

@yield('scripts-bottom')

</html>
