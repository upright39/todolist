@extends('layout.app')



@section('content')
<h4 class="text-center my-5"> Edith: {{$todo->name}} </h4>
<div class=" row justify-content-center">





 <div class="col-md-6">


  <div class="card">
   @if($errors->any())
   <div class="alert alert-danger">
    <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
     @endforeach
    </ul>
   </div>
   @endif
   <div class="card-header" style="background-color: #a3f2fd;">
    Edith Todo
   </div>

   <div class="card-body">

    <form action="/{{$todo->id}}/edith-todo" method="POST">
     @csrf
     <div class="mb-3">
      <input type="text" class="form-control" name="name" placeholder="name" value="{{$todo->name}}">
     </div>
     <div class="mb-3">
      <label class="form-label">Add Description</label>
      <textarea class="form-control" rows="3" name="description">{{$todo->description}}</textarea>
     </div>
     <div class=" mb-3">
      <button type="submit" class="btn btn-sm float-start" style="background-color: #e3f2fd;">Submit</button>
     </div>
    </form>
   </div>

  </div>

 </div>

</div>
</div>
@endsection