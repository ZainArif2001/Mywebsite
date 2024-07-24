@extends('layoutadmin.Admin')

@section('content')

@section('title')
    {{ 'Show Product' }}
@endsection


<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Brand</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Image</th>
            <th>Active</th>
        </tr>
    </thead>
    <tbody style="">
        @forelse ($productshows as $check)
            <tr class="table-dark">
                <th scope="row">{{ $check->id }}</th>
                <td>{{ $check->product_name }}</td>
                <td>{{ $check->product_price }}</td>
                <td>{{ $check->Product_brand }}</td>
                <td>{{ $check->product_description }}</td>
                <td><img src="{{ asset('images/' . $check->product_image) }}" alt="{{ $check->product_name }}"
                        width="100"></td>
                <td><a href="{{ route('productedite', ['id' => $check->id]) }}" class="btn btn-primary">Edite</a>--
                    <a href="{{ route('productdelete', ['id' => $check->id]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No products available</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
