@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
    @foreach($nomers as $nomer)
		<div class="col-xs-6 col-md-6 col-xs-offset-0 col-md-offset-0">
			<div class="panel panel-default">
				<h2 class="panel-heading" style="text-align:center ">{{ $nomer->name }}</h2>
                <div class="panel-body">

                    <img src="{!! $nomer->url !!}/1.jpg" class="img-responsive" alt="{{$nomer->opis}}">

                    <p> {{ $nomer->opis }}</p>
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
