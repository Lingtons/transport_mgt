<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Transport</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('_includes.nav.main')
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Copyright &copy; Aminci Transport Group 2017</h5>
                </div><!-- end col-sm-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
