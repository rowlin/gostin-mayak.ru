@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
    	<div class="col-xs-10 col-md-10 col-xs-offset-0 col-md-offset-0">



            <tr>
                <th>{{ $bron->name }}</th>
                <th>{{ $bron->phone }}</th>
                <th>{{ $bron->mail }}</th>
                <th>{{ $bron->nomer }}</th>
                <th> {{ $bron->bron_comment }}</th>
                <th>{{ $bron->kol }} </th>
                <th>{{ $bron->k_start }}</th>
                <th> {{ $bron->k_end }}</th>
            </tr>
            @endforeach
                </tbody>

                </table>

	</div>
</div>
@endsection