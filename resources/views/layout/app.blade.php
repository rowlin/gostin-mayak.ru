<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>App</title>

    <script type="text/javascript">
        var paths = {
            'current': '{{ Request::url() }}'
        };
    </script>
</head>
<body>
 @include('partials._header')
    @include('partials._nav')


    @yield('content')

    @include('partials._footer')


    <!-- Scripts -->
    <script src="{{ asset('/assets/js/vendor.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>