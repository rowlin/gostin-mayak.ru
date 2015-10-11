@extends('layout.app')

@section('content')

    <div class="row">
<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1" >
    <h2 style="text-align: center">Отзыв №{{ $feed->id }}</h2>

     <p>{{ $feed->comment }}</p>
        <i style="text-align: left">
        {{ $feed->name }} проживала с {{ $feed->u_start }} по {{  $feed->u_end }}
        </i>

    </div>
    </div>
@endsection