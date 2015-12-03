<!doctype html>
<html lang="en">
<head>

   <link href="{{ asset('./css/fullcalendar.css') }}" rel="stylesheet">
    <script src="{{asset('./js/moment.min.js')}}"></script>
    <script src="{{ asset('./js/vendor.js') }}"></script>
    <script src="{{ asset('./js/fullcalendar.js') }}"></script>

    <script src="{{ asset('./js/fullcalendar.min.js') }}"></script>


    <style>
        /* ... */
    </style>
</head>
<body>
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
{{ var_dump('$calendar->script') }}
</body>
</html>