@extends('layout.app')

@section('content')
    <div class="row">

        <div class=" col-xs-offset-1 col-xs-10 col-md-offset-1">
<div class="col-xs-12 col-md-12">
            <h1 style="text-align: center">Номер {{ $nomer->name }}</h1>

            <div class="col-xs-9 col-md-9">

                  <a  class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$nomer->name}}" data-caption="{{$nomer->opis}}" data-image="{!! $nomer->url !!}/1.jpg" data-target="#image-gallery">
   <img src="{!! $nomer->url !!}/1.jpg" class="img-responsive" alt="{{$nomer->opis}}"  data-toggle="modal" data-target="#myModal" >
                    </a>
            </div>

                <div class="col-xs-3 col-md-3">

                    <a  class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$nomer->name}}" data-caption="{{$nomer->opis}}" data-image="{!! $nomer->url !!}/2.jpg" data-target="#image-gallery">
                    <img src="{!! $nomer->url !!}/2.jpg" data-toggle="modal" data-target="#myModal"  class="img-responsive"   alt="{{$nomer->opis}}">
                    </a>
                    <a  class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$nomer->name}}" data-caption="{{$nomer->opis}}" data-image="{!! $nomer->url !!}/1.jpg" data-target="#image-gallery">
                    <img src="{!! $nomer->url !!}/1.jpg" class="img-responsive"  alt="{{$nomer->opis}}">
                    </a>
                    <a  class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$nomer->name}}" data-caption="{{$nomer->opis}}" data-image="{!! $nomer->url !!}/2.jpg" data-target="#image-gallery">
                        <img src="{!! $nomer->url !!}/2.jpg" class="img-responsive"  alt="{{$nomer->opis}}">
                    </a>
                </div>

            <h3 style="text-align: center">Описание номера:</h3>
            <h4>{{ $nomer->opis }}</h4>
            <h3>Колличество доступных мест : {{$nomer->k_mest}}</h3>

            <h3>Цена при размещении одного человека : {{ $nomer->price }}</h3>
            <h3>Цена за весь номер : {{$nomer->price_oll}}</h3>

                    <a class="btn btn-danger" href="{{ url('bron/create') }}"> Забронировать</a>
				</div>
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive" src="">
                    </div>
                    <div class="modal-footer">

                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" id="show-previous-image">< Туда</button>
                        </div>

                        <div class="col-md-8 text-justify" id="image-gallery-caption">
                        </div>

                        <div class="col-md-2">
                            <button type="button" id="show-next-image" class="btn btn-default">Сюда ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--снизу все фото с номерами -->

    </div>


    <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">

        <h1 style="text-align: center; padding: 20px;">Аппартаменты общего пользования</h1>

        <div class="col-xs-4">
            <img  class="img-responsive img-circle" src="{{ url('img/kuh.jpg') }}" style="width:300px" align="center" alt="Кухня"/>
            <h3 style="text-align:center">Кухня</h3>
        </div>
        <div class="col-xs-4">
            <img  class="img-responsive img-circle" src="{{ url('img/duw.png') }}"  style="width:300px;" align="center" alt="Душ"/>
            <h3 style="text-align:center">Душ</h3>
        </div>
        <div class="col-xs-4">
            <img  class="img-responsive img-circle" src="{{ url('img/pra4.jpg') }}" style="width: 300px;" align="center" alt="Прачечная"/>
            <h3 style="text-align:center">Прачечная</h3>
        </div>

    </div>

    <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">

        <h1  style="text-align: center">Услуги</h1>


        <div class="col-xs-3">

            <img  class="img-responsive " src="{{ url('img/usl/velo.png') }}" style="width:300px" align="center" alt="Кухня"/>
            <h3 style="text-align:center"> Прокат велосипеда</h3>
        </div>


        <div class="col-xs-3">
            <img  class="img-responsive " src="{{ url('img/usl/wifi.png') }}" style="width:300px" align="center" alt="Кухня"/>
            <h3 style="text-align:center">Бесплатный Wi-fi</h3>
        </div>

        <div class="col-xs-3">
            <img  class="img-responsive" src="{{ url('img/usl/avio.png') }}" style="width:300px" align="center" alt="Кухня"/>
            <h3 style="text-align:center">Заказ билетов</h3>
        </div>


        <div class="col-xs-3">
            <img  class="img-responsive " src="{{ url('img/usl/bag.png') }}" style="width:300px" align="center" alt="Кухня"/>
            <h3 style="text-align:center">Камера хранения</h3>
        </div>


    </div>



    <div class=" col-xs-12 col-md-12">

        <h1  style="text-align: center">Контакты</h1>

        <div class="col-xs-9 col-md-9">

            <img class="img-responsive" src="{{ url('img/map.png') }}" style="height: 400px;width:100%">

        </div>
        <div class="col-xs-3 col-md-3" style="text-align: center">
            <h3> мини-отель </h3>
            <h2> "Старый маяк"</h2>
            <h3>ул. Гжатская 22 к.1 </h3>
            <h2>+7 (921) 764 27 94</h2>
            <a href="" role="button" class="btn btn-info btn-primary active"  style=" max-width: 100%;" >Посмотреть на карте</a>

            <!--Социальные кнопки-->
        </div>


    </div>


    </div>


@endsection

<!--что доступно -->

<!--другие номера -->



@section('scripts')
    <script>

        $(document).ready(function(){

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current){
                $('#show-previous-image, #show-next-image').show();
                if(counter_max == counter_current){
                    $('#show-next-image').hide();
                } else if (counter_current == 1){
                    $('#show-previous-image').hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr){
                var current_image,
                        selector,
                        counter = 0;

                $('#show-next-image, #show-previous-image').click(function(){
                    if($(this).attr('id') == 'show-previous-image'){
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

                function updateGallery(selector) {
                    var $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-caption').text($sel.data('caption'));
                    $('#image-gallery-title').text($sel.data('title'));
                    $('#image-gallery-image').attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if(setIDs == true){
                    $('[data-image-id]').each(function(){
                        counter++;
                        $(this).attr('data-image-id',counter);
                    });
                }
                $(setClickAttr).on('click',function(){
                    updateGallery($(this));
                });
            }
        });
    </script>
@endsection