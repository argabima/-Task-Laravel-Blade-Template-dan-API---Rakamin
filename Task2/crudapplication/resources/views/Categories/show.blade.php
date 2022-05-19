@extends('Categories.layout')
@section('content')
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Categories->name }}</h5>
        <p class="card-text">Address : {{ $Categories->address }}</p>
        <p class="card-text">Phone : {{ $Categories->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>