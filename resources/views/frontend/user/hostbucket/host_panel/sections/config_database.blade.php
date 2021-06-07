<div class="row">
    <div class="col-md-12">
        <h4>MySql Databases Config - {{$database_name}}</h4> <br>
        @include('frontend.user.hostbucket.host_panel.common.flash_message')

        <div class="card card-sm">
            <div class="card-body">
                @include('frontend.user.hostbucket.host_panel.common.database_nav')

                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-back"></i> Back to Databases</a>
                <a href="#" data-target="#update_mysql_user_previlage" data-toggle="modal"  class="btn btn-primary btn-sm"><i class="fa fa-back"></i> Add User Access</a>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body pa-0">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-0">
                                            <tbody id="server_details_summery">
                                            <tr>

                                            </tr>
                                            <tr>
                                                <td class="w-70">Database Name</td>
                                                <td id="running_time" class="w-30">{{$database_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="w-70">IP Address</td>
                                                <td class="w-30">62.171.137.224</td>
                                            </tr>
                                            <tr>
                                                <td class="w-70">DB Type</td>
                                                <td class="w-30">Maria DB (MySQL)</td>
                                            </tr>
                                            <tr>
                                                <td class="w-70">MYSQL Version</td>
                                                <td class="w-30">{{$sql_server_info->version}}</td>
                                            </tr>
                                            <tr>
                                                <td class="w-70">MYSQL HOST</td>
                                                <td class="w-30">{{$sql_server_info->host}}</td>
                                            </tr>
                                            <tr>
                                                <td class="w-70">Remote SQL Configuration</td>
                                                @if($sql_server_info->is_remote == 0)
                                                    <td class="w-30">
                                                        None
                                                        <a class="btn btn-primary btn-xs" href="">

                                                            <i class="fa fa-cog"></i> Config
                                                        </a>
                                                    </td>
                                                @else

                                                @endif
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">

                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Previlages</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($get_mysql_users->data as $getMysqluser )
                                              @if(in_array($database_name,$getMysqluser->databases))
                                                  <tr>
                                                      <td><i class="fa fa-user"></i> {{$getMysqluser->user}}</td>
                                                      <td>
                                                          ALL
                                                      </td>
                                                      <td>
                                                          <a href="#" data-toggle="modal" data-target="#delete_user_{{$getMysqluser->user}}"> <i class="icon-trash txt-danger"></i> </a>
                                                      </td>
                                                  </tr>
                                                  @include('frontend.user.hostbucket.host_panel.dialogs.delete_privilage_database_user')

                                              @else

                                              @endif

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
</div>


@include('frontend.user.hostbucket.host_panel.dialogs.create_database_user')
@include('frontend.user.hostbucket.host_panel.dialogs.update_mysql_user_privilage')