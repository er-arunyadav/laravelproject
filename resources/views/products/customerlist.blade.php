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
                         <table id="user_table" class="table table-striped">
                            <thead>
                              <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                
                              </tr>
                            </thead>
                           
                          </table>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

    $('#user_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('customer.index') }}",
        },
        columns: [
           
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            }
            
        ]
    });

    

});
</script>
@endsection
