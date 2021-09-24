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
    </div>
    <!--row-->

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
        });
    </script>
@endsection




