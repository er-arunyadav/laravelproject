@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                 @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

@foreach($products as $product)
<div class="card" style="width: 18rem;margin-bottom: 24px;">
                 
<div class="card-body">
                    <h3 class="card-title text-center">{{$product->name}}</h3>

<form action="{{ route('order.store') }}" method="post" class="form-group">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity E.g. 1">
    </div>
    <div class="form-group">
        <button type="submit" name="order" class="btn btn-primary" style="width:100%">Buy</button>
    </div>
</form> 
</div>
 </div>
 @endforeach



        </div>
    </div>
</div>
@endsection
