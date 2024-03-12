<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Author -->
    <meta name="author" content="Afiq Faruqy" />
    <!-- Title -->
    <title>@yield('title', 'Pejabat Pendidikan Daerah Bintulu')</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Page Styles & Scripts -->
    @include('layouts.styles')
    @include('layouts.fonts')
    @yield('preload-scripts')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('/lib/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('/lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/js/main.js') }}"></script>
</head>
