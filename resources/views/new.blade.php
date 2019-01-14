@extends('layout')
@section('content')
<h1 class="text-center">Add New Blog</h1>
<div class="container">

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
    
  </div>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1"placeholder="Enter Description" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
   <button type="reset" class="btn btn-danger">Clear</button>
</form>
</div>
@endsection