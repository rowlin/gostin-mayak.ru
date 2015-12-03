@extends('layout.app')

@section('content')

    <!--Добавить слайдер-->

    <!--О нас-->
    <div class="row">


    <section>

        <h2 style="text-align: center">О нас</h2>
     <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1 " >
         <div class="col-xs-8">

<p> Наш мини-отель находится на севере Санкт-Петербурга, имеет удобное месторасположение, в 5 минутах ходьбы от ст. м. Академическая, в спокойном спальном районе, на пересечении проспектов Гражданского и Науки. Этот район характеризуется богатой инфраструктурой и хорошим транспортным сообщением с любой частью северной столицы. До центра города и Невского проспекта от отеля можно добраться менее чем за полчаса.</p>
<p> Вблизи отеля есть большой супермаркет, много магазинчиков, аптек, банков,кафе.</p>
<p> Рядом Российский НИИ травматологии и ортопедии им. Р.Р.Вредена, Санкт-Петербургский НИИ Фтизиопульмонологии и такие высшие учебные заведения, как Государственный медицинский университет им. И.И. Мечникова, торгово-экономический университет, Санкт-Петербургский государственный политехнический университет, Военная академия Связи им. С.М. Будённого и др., парк Сосновка, Сад Бенуа, Пискаревский и Муринский. Недалеко Кавголовские озера и горнолыжный центр «Охта-Парк».</p>
<p> Наш хостел расположен в новом жилом комплексе «Орбита», в отдельном помещении на первом этаже.</p>

<p> В мини-отеле 6 номеров различной категории, так же есть однокомнатные квартиры, которые можно снять посуточно.</p></div>

        <div class="col-xs-2 "><img src="{{ url('img/2.jpg') }}"></div>
         </div>

        <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">

            <h2 style="text-align: center">Номера</h2>






        <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">

        <h2 style="text-align: center">Аппартаменты общего пользования</h2>

<div class="col-xs-4">
<img  class="img-responsive img-circle" src="{{ url('img/kuh.jpg') }}" style="width:100%" align="left" alt="сейф"/>
    <h3 style="text-align:center">Кухня</h3>

            <div class="col-xs-4">
<img  class="img-responsive img-circle" src="{{ url('img/duw.png') }}"  style="width:100%;" align="center" alt="сейф"/>
                <h3 style="text-align:center">Душ</h3>
            </div>
            <div class="col-xs-4">
<img  class="img-responsive img-circle" src="{{ url('img/pra4.jpg') }}" style="width: 100%;" align="right" alt="сейф"/>
                       <h3 style="text-align:center">Прачечная</h3>
                </div>
                </div>



        <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">


        <h2>Услуги</h2>


        <div class="">


        </div>


        <h2>Номера</h2>


        <h2>Отзывы</h2>

        <h2>Контакты</h2>



</div>`


</div>




@endsection