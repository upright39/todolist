@extends('layout.app')



@section('content')
<h3 class="text-center my-5">My Todos </h3>
<div class=" row justify-content-center">
 <div class="col-md-8">

  <div class="card">
   <div class="card-header" style="background-color: #a3f2fd;">
    Todos
   </div>


   <div class="card-body">

    <ul class="list-group">
     @foreach($todos as $todo)
     <li class="list-group-item">

      {{$todo->name}}

      <a class="btn btn-success btn-sm float-end mr-3" href="/todo/{{$todo->id}}" style="background-color: #a3b2fd"
       ;>view</a>

      @if(!$todo->completed)
      <a href="/todo/{{$todo->id}}/complete" class="btn btn-sm float-end"
       style="background-color: #a3f2fd">completed</a>
      @endif



     </li>
     @endforeach
    </ul>


   </div>

  </div>
 </div>
</div>
@endsection