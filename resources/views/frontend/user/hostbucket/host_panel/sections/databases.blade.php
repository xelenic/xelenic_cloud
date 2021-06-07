<div class="row">
    <div class="col-md-12">
        <h4>MySql Databases</h4> <br>

       @include('frontend.user.hostbucket.host_panel.common.flash_message')





        <div class="card card-sm">
            <div class="card-body">
               @include('frontend.user.hostbucket.host_panel.common.database_nav')

                <p>Manage large amounts of information over the web easily.
                    MySQL databases are necessary to run many web-based applications,
                    such as bulletin boards, content management systems,
                    and online shopping carts.
                    For more information, read the documentation.</p><br>

                <ul class="nav nav-pills nav-light bg-light" role="tablist" style="border-radius: 19px;">
                    <li class="nav-item">
                        <a href="#" class="nav-link link-icon-left" data-toggle="modal" data-target="#create_database">
                            <i class="fa fa-database"></i>Create Database
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-icon-left" data-toggle="modal" data-target="#repair_database">
                            <i class="fa fa-dashcube"></i>Repair Database
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('frontend.user.hostbucket.phpmyadmin_login',$hosting_details->id)}}" method="post" target="_blank">
                            {{csrf_field()}}
                            <button type="submit" class="nav-link link-icon-left" style="border-style: none;">
                                <i class="fa fa-cubes"></i>PhpMyAdmin
                            </button>
                        </form>

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-icon-left" data-toggle="modal" data-target="#create_database">
                            <i class="fa fa-cog"></i>Option
                        </a>
                    </li>
                </ul><br>

                <div class="card">
                    <div class="">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Database Name</th>
                                            <th>Users</th>
                                            <th>Disk Usage</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($get_mysql_database->data as $getmySqlDB)
                                            <tr>
                                                <td>{{$getmySqlDB->database}}</td>
                                                <td>
                                                    @foreach($getmySqlDB->users as $duser)
                                                    <span class="badge badge-primary mt-15 mr-10">
                                                       <a href="" style="color: white;">
                                                           {{$duser}}
                                                       </a>
                                                   </span>
                                                    @endforeach
                                                </td>
                                                <td>{{$getmySqlDB->disk_usage}}</td>
                                                <td>
                                                    <a href="{{route('frontend.user.hostbucket.config_database',[$hosting_details->id,$getmySqlDB->database])}}"  class="mr-25" data-toggle="tooltip" data-original-title="Config">
                                                        <i class="fa fa-cogs"></i> Config Database
                                                    </a>
                                                    <a href="#"  data-toggle="modal"  data-target="#delete_database_{{$getmySqlDB->database}}">
                                                        <i class="icon-trash txt-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($get_mysql_database->data as $getmySqlDB)
    @include('frontend.user.hostbucket.host_panel.dialogs.delete_database')
@endforeach

@include('frontend.user.hostbucket.host_panel.dialogs.create_database')
@include('frontend.user.hostbucket.host_panel.dialogs.repair_datbase')