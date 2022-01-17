@extends('layout.app')



@section('content')
<h3 class="text-center my-5"> Create Todo </h3>
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
    Add Todo
   </div>

   <div class="card-body">

    <form action="/addtodo" method="POST">
     @csrf
     <div class="mb-3">
      <input type="text" class="form-control" name="name" placeholder="name">
     </div>
     <div class="mb-3">
      <label class="form-label">Add Description</label>
      <textarea class="form-control" rows="3" name="description"></textarea>
     </div>
     <div class="mb-3">
      <button type="submit" class="btn btn-sm float-start" style="background-color: #e3f2fd;"> Add</button>
     </div>
    </form>
   </div>

  </div>

 </div>

</div>
</div>
@endsection