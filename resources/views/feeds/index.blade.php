@extends('layout.app')

@section('content')
    <div class="row">
<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1" >
 <h1 style="text-align: center">Отзывы</h1>
 <hr>
    @foreach ($feeds as $feed)
    <div class="col-xs-5 col-md-6" style="padding-top: 30px;">
        <blockquote style="background-color: #afd9ee">
        <p>
            {{ $feed->comment }}
        </p>
        <i style="text-align: left">
        {{ $feed->name }} проживала с {{ $feed->u_start }} по {{  $feed->u_end }}
    </i>
            <hr>
            <a href="{{ url('/feed', $feed->id ) }}" >Подробнее</a>
            </blockquote>

    </div>
    @endforeach

</div>


<div style="text-align: center">
    <a href="{{url('/feed/create')}}" class="btn btn-success">Оставить свой отзыв</a>
</div>

    </div>
@endsection