<!doctype html>
<html lang="en">
<head>

   <link href="{{ asset('/css/fullcalendar.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/vendor.js') }}"></script>
    <script src="{{ asset('/js/fullcalendar.js') }}"></script>

<script src="{{ asset('/js/fullcalendar.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.print.css "/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css"/>

    <style>
        /* ... */
    </style>
</head>
<body>
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
</body>
</html>