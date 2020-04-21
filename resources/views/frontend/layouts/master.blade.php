<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Plugins CSS -->

    <link href="{{ asset('css/business-casual.min.css ') }}" rel="stylesheet">
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/meanmenu/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fancybox-master/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/aos-animation/aos.css') }}">
    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/ep-icon-fonts/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-5/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/HanyiSentyTang.woff') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  

</head>

<body>

    <div class="site-wrapper">

        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')

    </div>

    <!-- Vendor JS-->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-4.3.1/js/bootstrap.bundle.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('plugins/meanmenu/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('plugins/slick-1.8.1/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/fancybox-master/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('plugins/aos-animation/aos.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/active.js') }}"></script>
</body>

</html>
