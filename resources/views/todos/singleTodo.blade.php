@extends('layout.app')



@section('content')
<h3 class="text-center my-5"> {{$todo->name}} </h3>
<div class=" row justify-content-center">
 <div class="col-md-6">

  <div class="card">
   <div class="card-header" style="background-color: #a3f2fd;">
    Details
   </div>

   <div class="card-body">

    <ul class="list-group">

     <li class="list-group-item">

      {{$todo->description}}

     </li>

    </ul>

    <div class="text-center">
     <a class="btn btn-sm my-2" href="/todo" style="background-color: #c3f2fd" ;>Back</a>
     <a class="btn btn-sm my-2 ml-2" href="/mytodo/{{$todo->id}}/edith" style="background-color: #a3f2fd" ;>Edith</a>
     <a class="btn btn-sm my-2 ml-2" href="/mytodo/{{$todo->id}}/delete" style="background-color: #a3f2fd" ;>Delete</a>
    </div>
   </div>

  </div>

 </div>
</div>
@endsection