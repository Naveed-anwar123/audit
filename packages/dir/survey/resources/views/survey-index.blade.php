@extends('survey::templates.html')
@section('content')

    <div class="jumbotron">
        <h3 style="text-align: center">Listing of Audits</h3>
    </div>
<div class="col-md-8 col-md-offset-2">
    <table class="table table-hover">

       <thead>
       <th>Id</th>
       <th>Name</th>
       <th>status</th>
       <th>Date</th>
       </thead>
       <tbody>
       @foreach($audits as $audit)
        <tr>
            <td>{{$audit->id}}</td>
            <td>{{$audit->name}}</td>
            <td>{{$audit->is_published ? ' Published ' : 'Not Published'}}</td>
            <td>{{$audit->created_at->diffForHumans()   }}</td>
        </tr>
       </tbody>
   </table>
@endforeach
</div>
@endsection