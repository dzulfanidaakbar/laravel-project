@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Photo : {{ $students->photo }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Birth Date : {{ $students->birth_date }}</p>
        <p class="card-text">Is Verified : {{ $students->is_verified }}</p>
  </div>
       
    </hr>
  
  </div>
</div>