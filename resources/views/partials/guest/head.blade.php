<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

<meta name="theme-color" content="#056EB9" />
<meta name="msapplication-navbutton-color" content="#056EB9" />
<meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="/img/favicon/favicon.ico">
<link rel="icon" href="/img/favicon/favicon-32x32.png" type="image/png" sizes="32x32">
<link rel="icon" href="/img/favicon/favicon-16x16.png" type="image/png" sizes="16x16">
<link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png" sizes="180x180">
<link rel="manifest" href="/img/favicon/manifest.json">

<!-- Critical styles
================================================== -->
<link rel="stylesheet" href="/css/critical.min.css" type="text/css">

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

