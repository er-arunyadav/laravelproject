@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Assign Permission</div>

                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('assignpermission.store') }}" method="post">
                        {{ csrf_field() }}


                        <div class="form-group">
                        <label for="role">Choose Role:</label>
                        <select name='role' class="form-control" id='role'>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                        <label for="permission">Choose Permission:</label>
                        <select name='permission' class="form-control" id='permission'>
                            @foreach($permissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
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
