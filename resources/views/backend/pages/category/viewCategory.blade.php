@extends('backend.master')



@section('content')
<h1 class="text-center">Show Category Details</h1>


<table class="table table-primary table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <td>{{$d->id}}</td>
      <td>{{$d->categoryName}}</td>
      <td>{{$d->description}}</td>
      <td>{{$d->status}}</td>    
    </tr>
    @endforeach
    
  </tbody>
</table>

<div class="d-flex justify-content-center">
{{ $data->links() }}
</div>

@endsection