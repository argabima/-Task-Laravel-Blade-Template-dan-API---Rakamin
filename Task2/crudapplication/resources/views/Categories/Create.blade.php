@extends('Categories.layout')
@section('content')
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>ID</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>User_Id</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop