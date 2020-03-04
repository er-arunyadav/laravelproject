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
                         <table id="product_table" class="table table-striped">
                            <thead>
                              <tr>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>In Stock</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                           
                          </table>
        </div>
    </div>
</div>

<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Record</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sample_form" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-4" >First Name : </label>
                        <div class="col-md-8">
                            <input type="text" name="first_name" id="first_name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Last Name : </label>
                        <div class="col-md-8">
                            <input type="text" name="last_name" id="last_name" class="form-control" />
                        </div>
                    </div>
                    <br />
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="Add" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

    $('#product_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('product.index') }}",
        },
        columns: [
           
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'price',
                name: 'price'
            },
            {
                data:'in_stock',
                render:function(data){
                        if(data == 0){
                            return 'Out Of Stock';
                        }else{
                            return 'In Stock';
                        }
                },
            },{
                data: 'action',
    name: 'action',
    orderable: false
            }
            
        ]
    });

    $(document).on('click', '.edit', function(){
        alert('We can Implement Here to edit Stock Like Out of Stock Or Instock');
    });

});
</script>
@endsection
