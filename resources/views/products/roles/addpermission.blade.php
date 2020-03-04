@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Permisson</div>

                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('permission.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="permission">Add Permission:</label>
                        <input type="text" name='permission' class="form-control" id="permission">
                        </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
