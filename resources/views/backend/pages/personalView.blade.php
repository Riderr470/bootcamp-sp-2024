
@extends('backend.master')



@section('content')

Show Personal Details



<table class="table table-primary table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($personal as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->name}}</td>
      <td>{{$p->fatherName}}</td>
      <td>{{$p->motherName}}</td>
      <td>{{$p->age}}</td>
      <td>{{$p->address}}</td>
      <td>{{$p->status}}</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection