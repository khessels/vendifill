<!DOCTYPE html>
<html class="no-js"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.guest.head')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
{{--    <body class="page-home page-home-2">--}}
    <body class="page-contact">
        <div id="app">
    `        <!-- start header -->
            @include('partials.guest.top-bar')
            <!-- end header -->

            <!-- start side menu -->
            @include('partials.guest.side-menu')
            <!-- end side menu -->

            <!-- start main -->
{{--                @include('pages.index.guest')--}}
                @yield('content')

            <!-- end main -->

            <!-- start footer -->
            @include('partials.guest.footer')
            <!-- end footer -->
        </div>
        <div id="btn-to-top-wrap" class="compensate-for-scrollbar">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>
        <script>
            (function(w, d){
                var b = d.getElementsByTagName('body')[0],
                    s = d.createElement("script"),
                    v = !("IntersectionObserver" in w) ? "8.17.0" : "12.3.0",
                    o = {
                        elements_selector: ".lazy",
                        threshold: 500,
                        callback_enter: function (element) {

                        },
                        callback_set: function (element) {

                            oTimeout = setTimeout(function ()
                            {
                                clearTimeout(oTimeout);

                                AOS.refresh();
                            }, 1000);
                        },
                        callback_loaded: function (element) {

                        },
                        callback_error: function(element) {
                            element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
                        }
                    };
                s.type = 'text/javascript';
                s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
                s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
                b.appendChild(s);
                w.lazyLoadOptions = o;

                w.addEventListener('LazyLoad::Initialized', function (event)
                {
                    w.lazyLoadInstance = event.detail.instance;
                }, false);
            }(window, document));
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="/js/main.min.js"></script>
    </body>
</html>
