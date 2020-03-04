@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                         <table id="roles_table" class="table table-striped">
                            <thead>
                              <tr>
                                <th>Role name</th>
                                <th>Guard name</th>
                                
                              </tr>
                            </thead>
                           
                          </table>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

    $('#roles_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('role.index') }}",
        },
        columns: [
           
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'guard_name',
                name: 'guard_name'
            }
            
        ]
    });

    

});
</script>
@endsection
