@extends('layoutadmin.Admin')

@section('content')
@section('title') {{ 'Edit Product' }} @endsection

<h1>Edit Product</h1>

<form action="{{ route('proupdate', ['id' => $productedite->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset>
      <div>
        <label for="product_name" class="form-label mt-4">Product Name</label>
        <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name" value="{{ $productedite->product_name }}">
      </div>
      <div>
        <label for="product_price" class="form-label mt-4">Product Price</label>
        <input type="text" class="form-control" id="product_price" placeholder="Price" name="product_price" value="{{ $productedite->product_price }}">
      </div>
      <div>
        <label for="product_brand" class="form-label mt-4">Select Brand</label>
        <select class="form-select" id="product_brand" name="product_brand">
            <option value="Iphone" {{ $productedite->product_brand == 'Iphone' ? 'selected' : '' }}>Iphone</option>
            <option value="Samsung" {{ $productedite->product_brand == 'Samsung' ? 'selected' : '' }}>Samsung</option>
            <option value="Techno" {{ $productedite->product_brand == 'Techno' ? 'selected' : '' }}>Techno</option>
            <option value="Apple" {{ $productedite->product_brand == 'Apple' ? 'selected' : '' }}>Apple</option>
            <option value="Vivo" {{ $productedite->product_brand == 'Vivo' ? 'selected' : '' }}>Vivo</option>
        </select>
      </div>
      <div>
        <label for="product_description" class="form-label mt-4">Enter Product Description</label>
        <textarea class="form-control" id="product_description" rows="3" name="product_description">{{ $productedite->product_description }}</textarea>
      </div>
      <div>
        <label for="product_image" class="form-label mt-4">Select Image</label>
        <input class="form-control" type="file" id="product_image" name="product_image">
        @if ($productedite->product_image)
            <img src="{{ asset('images/' . $productedite->product_image) }}" alt="Product Image" width="100">
        @endif
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
</form>
@endsection
