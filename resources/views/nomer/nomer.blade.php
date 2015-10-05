@extends('layout.app')

@section('content')
    <div class="row">

        <div class=" col-xs-offset-2 col-xs-8 col-md-offset-2">

            <h1>Номер {{ $nomer->name }}</h1>
            <h2>Описание номера:</h2>
            <h3>{{ $nomer->opis }}</h3>
            <h2>Размещение: {{$nomer->k_mest}}</h2>
            <h2>Цена : {{ $nomer->price }}</h2>
            <h2>Цена2 : {{$nomer->price_oll}}</h2>

            <photo>


                </photo>

        </div>


        <!--снизу все фота с номерами -->
    </div>
@endsection