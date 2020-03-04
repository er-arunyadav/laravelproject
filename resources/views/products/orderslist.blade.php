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
                                <th>Invoice Number</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                
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
            url: "{{ route('order.index') }}",
        },
        columns: [
            {
                data: 'invoice_number',
                name: 'invoice_number'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'price',
                name: 'price'
            }
            ,
            {
                data: 'quantity',
                name: 'quantity'
            }
            ,
            {
                data: 'total_amount',
                name: 'total_amount'
            },
            {
                data:'status',
               render:function(data){
                        if(data == 0){
                            return 'New';
                        }else{
                            return 'Processed';
                        }
                },
            }
        ]
    });

    

});
</script>
@endsection
