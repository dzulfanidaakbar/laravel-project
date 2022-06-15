@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Photo</label></br>
        <input type="text" name="photo" id="photo" value="{{$students->photo}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="integer" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <label>Birth Date</label></br>
        <input type="date" name="birth_date" id="birth_date" value="{{$students->birthdate}}" class="form-control"></br>
        <label>Is Verified</label></br>
        <input type="tinyinteger" name="is_verified" id="is_verified" value="{{$students->is_verified}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop