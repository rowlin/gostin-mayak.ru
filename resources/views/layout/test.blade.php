<html>
<head>
    <title>bootstrap datepicker examples</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Bootstrap CSS and bootstrap datepicker CSS used for styling the demo pages-->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/datepicker.css') }}">
</head>
<body>
<div class="container">
    <div class="hero-unit">

        <div class="well">
            <table class="table">
                <thead>
                <tr>
                    <th>Check in: <input type="text" class="span2" value="" id="dpd1" ></th>
                    <th>Check out: <input type="text" class="span2" value="" id="dpd2" ></th>
                </tr>
                </thead>
            </table>

    </div>
</div>
<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="{{ asset('/js/vendor.js') }}"></script>
<script src="{{ asset('/js/datepicker.js') }}"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');

    });
</script>
</body>
</html>