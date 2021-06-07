<div class="row">
    <div class="col-md-12">
        <h4>MySql Databases</h4> <br>
        @include('frontend.user.hostbucket.host_panel.common.flash_message')

        <div class="card card-sm">
            <div class="card-body">
                @include('frontend.user.hostbucket.host_panel.common.database_nav')
                <ul class="nav nav-pills nav-light bg-light" role="tablist" style="border-radius: 19px;">
                    <li class="nav-item">
                        <a href="#" class="nav-link link-icon-left" data-toggle="modal" data-target="#create_user_database">
                            <i class="fa fa-user-plus"></i>Create Users
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
                                        <th>Username</th>
                                        <th>Databases</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mysql_users as $mysql_user)
                                            <tr>
                                                <td>{{$mysql_user->user}}</td>
                                                <td>
                                                    @foreach($mysql_user->databases as $database)
                                                        <span class="badge badge-primary mt-15 mr-10">
                                                            <a href="{{route('frontend.user.hostbucket.config_database',[$hosting_details->id,$database])}}" style="color: white;">
                                                                {{$database}}
                                                            </a>
                                                        </span>
                                                    @endforeach

                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="modal"  data-target="#delete_user_{{$mysql_user->user}}">
                                                        <i class="icon-trash txt-danger"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            @include('frontend.user.hostbucket.host_panel.dialogs.delete_database_user')
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


@include('frontend.user.hostbucket.host_panel.dialogs.create_database_user')