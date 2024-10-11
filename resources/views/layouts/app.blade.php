<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- loader-->
    <link href="{{ asset('/') }}css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('/') }}js/pace.min.js"></script>

    <!--plugins-->
    <link href="{{ asset('/') }}plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('/') }}plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('/') }}css/dark-theme.css" rel="stylesheet" />
    <link href="{{ asset('/') }}css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('/') }}css/header-colors.css" rel="stylesheet" />
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">

        @include('layouts.sidebar')
        @include('layouts.navigation')

        <!-- Page Content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                {{ $slot }}
            </div>

            <!--start footer-->
            <footer class="footer">
                <div class="footer-text">
                    Copyright © {{ date('Y') }}. All right reserved.
                </div>
            </footer>
            <!--end footer-->


            <!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top">
                <ion-icon name="arrow-up-outline"></ion-icon>
            </a>
            <!--End Back To Top Button-->

            <!--start overlay-->
            <div class="overlay nav-toggle-icon"></div>
            <!--end overlay-->


            <!-- JS Files-->
            <script src="{{ asset('/') }}js/jquery.min.js"></script>
            <script src="{{ asset('/') }}plugins/simplebar/js/simplebar.min.js"></script>
            <script src="{{ asset('/') }}plugins/metismenu/js/metisMenu.min.js"></script>
            <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <!--plugins-->
            <script src="{{ asset('/') }}plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
            <script src="{{ asset('/') }}js/index.js"></script>
            <!-- Main JS-->
            <script src="{{ asset('/') }}js/main.js"></script>


</body>

</html>
