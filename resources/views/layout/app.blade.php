<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>App</title>

    <style>
    
     .test {
                position: relative;
                height: 70px;
                line-height: 15px;
                overflow: hidden;
           }
          .test::after {
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijk5JSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
                    background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 99%, rgba(255,255,255,1) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(99%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,1)));
                background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%);
                background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%);
                background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%);
                background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 );
                bottom: 0;
                content: '';
                height: 20px;
                left: 0;
                position: absolute;
                width: 100%;
           }

    </style>


    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('/assets/ico/favicon.png') }}">
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
    <script src="{{ asset('/js/moment.min.js') }}"></script>
    <script src="{{ asset('/js/vendor.js') }}"></script>
    <script src="{{ asset('/js/datepicker.js') }}"></script>
 @yield('scripts')
</body>
</html>