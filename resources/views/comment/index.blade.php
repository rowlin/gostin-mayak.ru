 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>name</th>
         <th>text</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($comment as $comment)
         <tr>
             <td>{{ $comment->id }}</td>
             <td>{{ $commment->name }}</td>
             <td>{{ $comment->comment }}</td>
             <td><a href="" class="btn btn-primary">Read</a></td>
             <td><a href="" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['comment.destroy', $comment->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
        @endforeach
    </tbody>
 </table>