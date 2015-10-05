@extends('layout.app')

@section('content')
    <div class="row">
<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1" >
 <h1>Отзывы</h1>
 <a href="{{url('/feed/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>name</th>
         <th>Id user</th>
         <th>start date</th>
         <th>end date</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($feeds as $feed)
         <tr>
             <td>{{ $feed->id }}</td>
             <td>{{ $feed->name }}</td>
             <td>{{ $feed->id_user }}</td>
             <td>{{ $feed->u_start }}</td>
             <td>{{ $feed->u_end }}</td>
             <td><a href="" class="btn btn-primary">Read</a></td>
             <td><a href="" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['feed.destroy', $feed->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
        @endforeach
    </tbody>
     </table>
</div>
    </div>
@endsection