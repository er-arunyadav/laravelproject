@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Product</div>

                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('product.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="product_name">Product Name:</label>
                        <input type="text" name='product_name' class="form-control" id="product_name">
                        </div>
                        <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" name='price' class="form-control" id="price">
                        </div>
                        <div class="form-group">
                        <label for="stock">Stock:</label>
                        <select name="stock" class="form-control">
                            <option value="1">In Stock</option>
                            <option value="0">Out Stock</option>
                            
                        </select>
                        </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
