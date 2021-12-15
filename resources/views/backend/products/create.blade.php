@extends('layouts.backend')
@section('main')

    <div class="row">
        <h3 class="text-center mt-3 link-primary">Create New Products</h3>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('admin.product.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Products Name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Enter Your Products Price">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea rows="5" name="desc" class="form-control" id="desc" placeholder="Enter Your Products Description" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Product Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="Enter Your Products Price">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>


@endsection
