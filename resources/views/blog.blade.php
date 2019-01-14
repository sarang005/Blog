@extends('layout')
@section('content')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" placeholder="Enter Name">
    
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Add Comment</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add Comment"></textarea>
  </div>
   <label for="exampleFormControlTextarea1">Email</label>
   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="someone@gmail.com">
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

</div>
<div class="container mt-3">
<div class="jumbotron" style="background-color:#FFF5EE;">   
  <h3 class="display-6">Comments</h3>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  
</div>
</div>
@endsection