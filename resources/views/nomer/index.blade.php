
@extends('layout.app')


@section('content')

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="{{ url('images/1.jpg') }}" alt="{{ trans('nomer.nomer4') }}" style="width:100%;" >
                <div class="carousel-caption">
                    <h3>{{ trans('nomer.nomer4') }}</h3>
                </div>
            </div>


            <div class="item">
                <img src="{{ url('images/2.jpg') }}" alt="{{ trans('nomer.hallway') }}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{ trans('nomer.hallway') }}</h3>
                </div>
            </div>

            <div class="item">
                <img src=" {{ url('images/3.jpg') }}" alt="{{ trans('nomer.nomer5') }}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{ trans('nomer.nomer5') }}</h3>
                </div>
            </div>

            <div class="item">
                <img src=" {{ url('images/4.jpg') }}" alt="{{ trans('nomer.nomer7') }}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{ trans('nomer.nomer7') }}</h3>
                </div>
            </div>

            <div class="item">
                <img src=" {{ url('images/5.jpg') }}" alt="{{ trans('nomer.nomer3') }}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{ trans('nomer.nomer3') }}</h3>
                </div>
            </div>

            <div class="item">
                <img src=" {{ url('images/6.jpg') }}" alt="{{ trans('nomer.kitchen') }}" style="width:100%;" >
                <div class="carousel-caption">
                    <h3>{{ trans('nomer.kitchen') }}</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> <!-- Carousel -->


<!--О нас-->

<div class="container">
    <div class="row">
    <h2 style="text-align:center">{{ trans('nomer.about') }}</h2>
        <div class="col-xs-12 col-md-8">
            <p>{{ trans('nomer.about_t1')}}</p>
            <p>{{ trans('nomer.about_t2')}}</p>
            <p>{{ trans('nomer.about_t3')}}</p>
            <p>{{ trans('nomer.about_t4')}}</p>
            <p>{{ trans('nomer.about_t5')}}</p>
            <p>{{ trans('nomer.hello')}}</p>
        </div>

    <div class="col-xs-12 col-md-4">
<img src="{{ url('images/1/2.jpg') }}" class="img-thumbnail" style="width:100%;" alt=""/>
<img  src="{{ url('images/1/1.jpg') }}" class="img-thumbnail" style="width:100%;" alt=""/>
    </div>
    </div>
    </div>



    <div class="container">
        <div class="row">

            <h2 style="text-align: center;">{{ trans('nomer.nomers') }}</h2>

            @foreach($nomers as $nomer)
                <div class="col-xs-12 col-md-6" style="padding-top:40px;">
                    <div class="panel panel-default" >
                        <h2 class="panel-heading" style="text-align:center; margin-top:0px;">{{ $nomer->name }}</h2>
                        <div class="panel-body">

                            <img src="{!! $nomer->url !!}/1.jpg" class="img-responsive" alt="{{$nomer->opis}}">

                                 <div class="to_opis">
                                 {{ $nomer->opis }}
                                        </div>
                            <h4> Цена: {{ $nomer->price }}</h4>
                            <a class="btn btn-primary left" style="right: auto" href="{{ url('nomer', $nomer->id) }}">Подробнее</a>
                            <a class="btn btn-danger " style="left: auto;" href="{{ url('bron/create') }}" >Забронировать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection


