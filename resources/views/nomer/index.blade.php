@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
    @foreach($nomers as $nomer)

		<div class="col-xs-6 col-md-6 col-xs-offset-0 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $nomer->name }}</div>
                <div class="panel-body">
                <p> {{ $nomer->opis }}</p>
                <h3>Колличество мест: {{ $nomer->k_mest }} </h3>
                <h3>Цена: {{ $nomer->price }}</h3>

				</div>
			</div>
		</div>
        @endforeach
	</div>
</div>
@endsection