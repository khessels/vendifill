<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    @csrf--}}
    <title>@yield('title') </title>

    @yield('head')
    @yield('head_scripts')
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    <link rel="stylesheet" href="/css/doc.css" type="text/css">--}}


    <link rel="stylesheet" href="/css/critical.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css" type="text/css">
{{--    <link rel="stylesheet" href="/js/aos/aos.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="/js/jarallax/jaralax.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="/js/slick/slick.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="/js/nice-select/nice-select.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="/js/ion.rangeSlider/css/ion.rangeSlider.css" type="text/css">--}}







<!--
    /// <reference path='../libs/aos/aos.js' />
    /// <reference path='../libs/jarallax/jarallax.js' />
    /// <reference path='../libs/jarallax/jarallax-element.js' />
    /// <reference path='../libs/slick/slick.js' />
    /// <reference path='../libs/countTo/jquery.countTo.js' />
    /// <reference path='../libs/isotope/isotope.pkgd.js' />
    /// <reference path='../libs/fancybox/jquery.fancybox.js' />
    /// <reference path='../libs/nice-select/jquery.nice-select.js' />
    /// <reference path='../libs/ion.rangeSlider/js/ion.rangeSlider.js' />
-->
    @if( ! empty( $cms))
        <style>
            .tox-tinymce {
                z-index: 1001;
            }
        </style>
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.0/tinymce.min.js" integrity="sha512-/4EpSbZW47rO/cUIb0AMRs/xWwE8pyOLf8eiDWQ6sQash5RP1Cl8Zi2aqa4QEufjeqnzTK8CLZWX7J5ZjLcc1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    @endif


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
    @yield('content')

    <!-- end main -->

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>


<script type="text/javascript" src="/js/main.min.js"></script>
<script src="/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="/js/aos/aos.js"></script>
<script src="/js/jarallax/jarallax.js"></script>
<script src="/js/jarallax/jarallax-element.js"></script>
<script src="/js/jarallax/jarallax-video.js"></script>
<script src="/js/slick/slick.js"></script>
<script src="/js/countTo/jquery.countTo.js"></script>
<script src="/js/isotope/isotope.pkgd.js"></script>
<script src="/js/fancybox/jquery.fancybox.js"></script>
<script src="/js/nice-select/jquery.nice-select.js"></script>
<script src="/js/ion.rangeSlider/js/ion.rangeSlider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>
@if( ! empty( $cms))
    @include('partials.cms')
@endif
@include('partials.error-alert')
</html>
