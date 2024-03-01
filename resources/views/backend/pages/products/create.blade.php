@extends('backend.master')


@section('content')
<h2> Create new product </h2>


<form action="" method = "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="productName" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Category</label>
    <input type="text" class="form-control" id="productCategory" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="text" class="form-control" id="productPrice" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Quantity</label>
    <input type="text" class="form-control" id="productQuantity" >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection