<div class="row">
    <div class="col-md-12">
        <h4>Remote SQL DB</h4> <br>
        @include('frontend.user.hostbucket.host_panel.common.flash_message')

        <div class="card card-sm">
            <div class="card-body">
                @include('frontend.user.hostbucket.host_panel.common.database_nav')
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    Add a specific domain name to allow visitors to connect to your MySQL
                                    databases. Applications like bulletin boards, online shopping carts,
                                    and content management systems require databases to operate.
                                </p>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading mb-10">Warning</h4>
                                    <p>HostBucket may add remote hosts to this
                                        list at the server level. If you see a hostname or IP
                                        address that you do not recognize, or remove a hostname or
                                        IP address that reappears later, contact Xelenic Customer Care.</p>
                                    <hr class="hr-soft-success">
                                    <p>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('frontend.user.hostbucket.remote_sql_host_add',$hosting_details->id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Host (% wildcard is allowed)</label>
                                        <input type="text" class="form-control" name="host" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <input type="text" class="form-control" name="comment" >
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Add Host</button>
                                </form>
                            </div>
                        </div>

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="edit_datable_2" class="table table-hover mb-0" style="cursor: pointer;">
                                    <thead>
                                    <tr>
                                        <th>Access Hosts</th>
                                        <th>ENV Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($host_node->data as $key=>$details)
                                        <tr>
                                            <td tabindex="1">{{$key}}</td>
                                            <td tabindex="1">OK</td>
                                            <td tabindex="1">
                                                <form method="post" action="{{route('frontend.user.hostbucket.remote_sql_host_delete',[$hosting_details->id])}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="host" value="{{$key}}">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>


                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <input style="position: absolute; top: 91px; left: 199px; padding: 12px 20px; text-align: left; font: 400 14px / 21px Inter, sans-serif; width: 294px; height: 46px; border-width: 1px 0px 0px; border-style: solid none none; border-color: rgb(234, 236, 236) rgb(33, 37, 41) rgb(33, 37, 41); display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


