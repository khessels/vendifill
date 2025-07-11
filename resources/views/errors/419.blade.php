<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>{{__('Page Expired')}}: 419</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#056EB9" />
    <meta name="msapplication-navbutton-color" content="#056EB9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <link rel="icon" href="/img/favicon/favicon-32x32.png" type="image/png" sizes="32x32">
    <link rel="icon" href="/img/favicon/favicon-16x16.png" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="manifest" href="/img/favicon/manifest.json">

    <!-- Critical styles
    ================================================== -->
    <link rel="stylesheet" href="/css/critical.css" type="text/css">

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Assistant:200,300,400,600,700,800', 'Raleway:600&display=swap'] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        _html.className = _html.className.replace("no-js","js");
        _html.classList.add( isTouch ? "touch" : "no-touch");
    </script>
    <script type="text/javascript" src="/js/device.min.js"></script>
</head>

<body class="page-404">
<div id="app">
    <!-- start hero -->
    <div
        id="hero"
        class="hero"
        style="background-image: url(/img/hero_img/1.jpg);background-color: #2d69b9">

        <div class="hero__inner">
            <div class="container">
                <a class="site-logo" href="/index">
                    <img class="img-fluid" src="/img/site_logo/logo_2.svg" width="155" height="40" alt="vendifill.com logo" />
                </a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 col-lg-5">
                        <div class="hero__title h1"><span>{{__('Page Expired')}}: 419</span></div>

{{--                        <p>--}}
{{--                            <img class="img-fluid" src="/img/404.png" alt="vendifill.com 404"/>--}}
{{--                        </p>--}}

                        {{--								<p>--}}
                        {{--									Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth tetra barreleye springfish chubsucker Pacific hake sea devil New--}}
                        {{--								</p>--}}

                        <p>
                            <a class="custom-btn custom-btn--big custom-btn--s3" href="/">{{__('Back to Home page')}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- Common styles
    ================================================== -->
    <link rel="stylesheet" href="/css/style.min.css" type="text/css">
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
