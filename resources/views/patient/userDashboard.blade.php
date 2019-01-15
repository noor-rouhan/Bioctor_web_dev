@extends('layouts.app')

@section('header')

<header class="header header-inverse" style="background-color: #c2b2cd;">

  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <h1>Doctor Portal</h1>
    
      </div>
    </div>
  </div>

</header>
@stop

@section('content')

<div class="btn-group" role="group" aria-label="Basic example">
    <a href="/patient/edit/create" class="btn btn-default">Store</a>
    <a href="" class="btn btn-default">Edit</a>
    <a href="" class="btn btn-default">Delete</a>
  </div>

 
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Age</th>
        <th scope="col">Sex</th>
      </tr>
    </thead>
    <tbody>
        @foreach($patients_j as $key=>$value){
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$value["patient_name"]}}</td>
        <td>{{$value["age"]}}</td>
        <td>{{$value["sex"]}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
   
@stop