@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
    @foreach($nomers as $nomer)

		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $nomer->name }}</div>
                <div class="panel-body">
                <h3>Описание номера:</h3>
                <p> {{ $nomer->opis }}</p>
                <h3>Колличество мест: {{ $nomer->k_mest }} </h3>
                <h3>Цена: {{ $nomer->price }}</h3>
                    <h4>Цена за полсуток {{ $nomer->price_pol }}</h4>

				</div>
			</div>
		</div>
        @endforeach
	</div>
</div>
@endsection