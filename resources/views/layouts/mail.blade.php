<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('css')

    @yield('js')
</head>
<body>
    <main class="main">
        @yield('main')
    </main>
</body>
</html>
