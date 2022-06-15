@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Photo</label></br>
        <input type="text" name="photo" id="photo" class="form-control"></br>
        <label>Age</label></br>
        <input type="integer" name="age" id="age" class="form-control"></br>
        <label>Birth Date</label></br>
        <input type="date" name="birth_date" id="birth_date" class="form-control"></br>
        <label>Is Verified</label></br>
        <input type="tinyinteger" name="is_verified" id="is_verified" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop