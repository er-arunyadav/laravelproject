@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Customer</div>

                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('customer.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="name">Customer Name:</label>
                        <input type="text" name='name' class="form-control" id="name">
                        </div>
                        <div class="form-group">
                        <label for="email">Customer Email:</label>
                        <input type="email" name='email' class="form-control" id="email">
                        </div>
                        
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
