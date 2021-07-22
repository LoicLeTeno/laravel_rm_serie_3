<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level HTML Template</title>
    <!--

Template 2095 Level

http://www.tooplate.com/view/2095-level

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}"> <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}"> <!-- Templatemo style -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="tm-main-content" id="top">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>

    <!-- load JS files -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <!-- jQuery (https://jquery.com/download/) -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- https://popper.js.org/ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <!-- https://github.com/qodesmith/datepicker -->
    <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
    <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="{{ asset('slick/slick.min.js') }}"></script>
    <!-- http://kenwheeler.github.io/slick/ -->

    @include('partials.script.function')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
