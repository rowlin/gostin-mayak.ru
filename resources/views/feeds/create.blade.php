@extends('layout.app')

@section('content')
<div class="row">
<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">
    {!! Form::open([
    'route' => 'feed.store'
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Имя :', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th> Проживал в мини-отеле с: <input type="text" class="span2" value="" id="dpd1" ></th>
                <th> до : <input type="text" class="span2" value="" id="dpd2" ></th>
                <th> в номере : {!! Form::select('comment', ['Трехместный номер', 'Двухместный номер №4', 'Двухместный номер №7',
                 'Одноместный номер', 'Vip (аппартаменты)']) !!}</th>
            </tr>
            </thead>
        </table>

    <div class="form-group">
    {!! Form::label('comment', 'Отзыв :', ['class' => 'control-label']) !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Оставить комментарий', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

    </div>
</div>
@endsection

@section('scripts')
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
@endsection