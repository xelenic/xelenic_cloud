@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Project&nbsp;</strong>
                    <a class="btn btn-primary pull-right" href="{{route('admin.products.create')}}" role="button">Add Project</a>

                </div>
                <!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Logo</th>
                            <th scope="col">project_name</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Option</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <!--card-->
        </div>
        <!--col-->

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form name="importform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-header">
                            <h3 class="modal-title" id="ModalDeleteLabel">Delete</h3>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <h5>Are you sure you want to remove this Advertisement?</h5>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">Delete</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--row-->

    <!-- Modal delete -->





    <script type="text/javascript">
        $(function() {

            var table = $('#villadatatable').DataTable({
                processing: false,
                ajax: "{{route('admin.products.dataDetails')}}",
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'icon',
                        name: 'icon'
                    },
                    {
                        data: 'product_name',
                        name: 'product_name'
                    },
                    {
                        data: 'product_type',
                        name: 'product_type'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            var user_id;

            $(document).on('click', '.delete', function(){
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"products/delete/"+user_id,

                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#villadatatable').DataTable().ajax.reload();
                        });
                    }
                })
            });

        });
    </script>
@endsection




