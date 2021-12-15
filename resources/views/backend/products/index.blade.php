@extends('layouts.backend')

@section('main')
    <h3 class="text-center mt-3"> All Products </h3>
    <a href="{{route('admin.product.create')}}" class="btn btn-primary"> Create New Products</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price (BDT)</th>
                <th scope="col">Product Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $key=> $product)
            <tr class="border-success">
                <th scope="row">{{$key+1}}</th>
                <td class="text-capitalize">{{$product -> name}}</td>
                <td>{{$product-> price}} TK</td>
                <td>{{$product->desc}}</td>
                <td>
                    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('admin.product.delete', $product->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
