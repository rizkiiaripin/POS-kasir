@extends('layouts.app')
@section('content')
    <div class="row gap-4 shadow-sm p-3">
        <div class="col-12  ">
            <h4 class="mb-4">Products</h4>
            <a href="/products/create" class="btn btn-primary mb-3">Add New Product</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Price</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->unit_id }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->barcode }}</td>
                        <td>{{ $product->stock }}</td>
                        <td> {{ $product->category_id }} </td>
                        <td>
                            <a href="/products/1/edit" class="btn btn-primary btn-sm">Edit</a>
                            <form action="/products/1" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
