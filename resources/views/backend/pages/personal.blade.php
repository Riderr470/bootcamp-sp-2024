@extends('backend.master')



@section('content')
<h1>Personal Information</h1>

<form action= "{{route('personal.form')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name= "name" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="motherName" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" name= "motherName" id="motherName">
  </div>
  <div class="mb-3">
    <label for="fatherName" class="form-label">Father's Name</label>
    <input type="text" class="form-control" name= "fatherName" id="fatherName">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" name= "age" id="age">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea class="form-control" name= "address" id="address"></textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection