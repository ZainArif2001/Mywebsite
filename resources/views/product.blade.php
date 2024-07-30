@extends('layoutadmin.Admin')

@section('content')

@section('title') {{'Add product'}} @endsection
<h1>product</h1>


<form action="{{route('productpost')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset>
      <div>
        <label for="exampleInputEmail1" class="form-label mt-4">Product Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" name="product_name">
        @error('product_name')
        <small id="emailHelp" class="btn btn-danger">{{$message}}</small>


        @enderror
      </div>
      <div>
        <label for="exampleInputPassword1" class="form-label mt-4">Product Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" autocomplete="off" name="product_price">
      </div>
      <div>
        <label for="exampleSelect1" class="form-label mt-4">Select Brand</label>
        <select class="form-select" id="exampleSelect1" name="Product_brand">
            <option>Iphone</option>
            <option>Samsung</option>
            <option>Techno</option>
            <option>Apple</option>
            <option>Vivo</option>
        </select>
      </div>
      <div>
        <label for="exampleTextarea" class="form-label mt-4">Enter Product Description</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="product_description">
        </textarea>
      </div>
      <div>
        <label for="formFile" class="form-label mt-4">Select Image</label>
        <input class="form-control" type="file" id="formFile" name="product_image">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>

@endsection
