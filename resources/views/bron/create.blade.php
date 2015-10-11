@extends('layout.app')

@section('content')
    <div class="row">

        <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">

            {!! Form::open([
            'route' => 'bron.store'
            ]) !!}
            <h2 style="text-align: center">Забронировать номер</h2>
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach( $errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            <div class="form-group">
                {!! Form::label('name', 'Введите Имя :', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                                {!! Form::label('phone', 'Номер телефона :', ['class' => 'control-label']) !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                {!! Form::label('mail', 'Почта :', ['class' => 'control-label']) !!}
                {!! Form::text('mail', null, ['class' => 'form-control']) !!}
            </div>


            <div class="well">
                <div class="row">
                    <div class="col-xs-6" >

                        {!! Form::label('nomer', 'Выбирете номер :', ['class' => 'control-label']) !!}
                        {!! Form::select('nomer', [
                        '2'  => 'Трехместный номер(женский)',
                        '1' => 'Трехместный номер(мужской)',
                        '3' => 'Двухместный номер №4' ,
                        '6' => 'Двухместный номер №7',
                        '4'=> 'Одноместный номер' ,
                        '7'=> 'Vip (аппартаменты)']) !!}

                        <div id="mess"></div>
                </div>

                <div class="col-xs-6">
                    {!! Form::label('', 'Просмотреть номера :', ['class' => 'control-label']) !!}
                    <a href="{{ url('nomer/7') }}">Vip номер</a><br/>
                    <a href=" {{ url('nomer/4') }}">Одноместный номер</a><br/>
                    <a href="{{url('nomer/6')}}">Двухместный номер с общей краватью - №7</a><br/>
                    <a href="{{url('nomer/3')}}">Двухместный номер с раздельными краватями -№4</a><br/>
                    <a href="{{ url('nomer/1') }}">Трехместный номер(мужской)</a><br/>
                    <a href="{{ url('nomer/2') }}">Трехместный номер(женский)</a>
                </div>
                </div>
             <!--подобрать изображения и сделать встроку выбор по изображениям-->
                </div><!--well--->
            <div class="well">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Дата заезда  {!! Form::text('k_start', null , array('type'=> 'text', 'class' => 'span2','id'=>'dpd1')) !!}</th>
                        <th> Дата выезда : {!! Form::text('k_end', null , array('type'=> 'text', 'class' => 'span2','id'=>'dpd2')) !!}</th>
                    <th><a href="">Проверить доступность</a></th>
                    </tr>
                    </thead>
                </table>
                <div class="form-group">
                    {!! Form::label('bron_comment', 'Комментарий:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('bron_comment', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                {!! Form::submit('Забронировать', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>



        @endsection

        @section('scripts')
            <script>
                $(document).ready(init);
                function init(){ $('#nomer').bind('change', desc); }


                function desc(){ var op=$('#nomer').val();
                    switch (op) { case '1': $('#mess').html('<p>Номер с подселением</p><p>Введите колличество человек (от 1 до 3) :<input  name="kol"  rows="1" col="1"></p><p>Если вы собиратесь занять номер полность - введите 3</p>');break;
                        case '2': $('#mess').html('<p>Номер с подселением</p><p>Введите колличество человек (от 1 до 3) :<input  name="kol"  rows="1" col="1" name="kol" id="kol"></p><p>Если вы собиратесь занять номер полность - введите 3</p>'); break;
                        case '3': $('#mess').html('<p>Номер с возможным подселением</p><p>Введите колличество человек (от 1 до 2) :<input  name="kol"  rows="1" col="1" name="kol" id ="kol"></p><p>Если вы собиратесь занять номер полность - введите 2</p>'); break;
case '4': $('#mess').html('<p>Одноместный номер.</p>'); break;
                        case '4': $('#mess').html('<p>Одноместный номер<p>'); break;
                        case '6': $('#mess').html('<p>Двухместный номер с общей краватью - №7</p>'); break;
                    }}
                $( "#nomer" )
                        .change(function() {
                            var str = "";
                            $( "select option:selected" ).each(function() {
                                str += $( this ).html();
                            });
                            $( "#mess" ).html( str );
                        })
                        .trigger( "change" );
                </script>


            <script type="text/javascript">
                // When the document is ready
                $(document).ready(function () {
                    var nowTemp = new Date();
                    //  var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                    var checkin = $('#dpd1').datepicker( {
                        //   onRender: function(date) {
                        // return date.valueOf() < now.valueOf() ? 'disabled' : '';
                        format: 'yyyy-mm-dd'
                        //  }
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
                        format: 'yyyy-mm-dd'
                        //     onRender: function(date) {
                        //        return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                        //   }
                    }).on('changeDate', function(ev) {
                        checkout.hide();
                    }).data('datepicker');

                });
            </script>
@endsection