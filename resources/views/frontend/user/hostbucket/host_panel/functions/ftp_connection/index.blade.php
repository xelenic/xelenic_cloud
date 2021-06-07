@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">
        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.breadcums.breadcums',[
          'breadcrumb' => [
                  [
                      'name' =>'Host Bucket',
                      'url' => route('frontend.user.hostbucket'),
                      'is_active' => null
                  ],
           ]
          ])
        </div>
        <div class="container-fluid mt-xl-50 mt-sm-30 mt-15 px-xxl-65 px-xl-20">
        @include('frontend.user.hostbucket.host_panel.common.tools_nav')

        <!-- Tab panes -->
            <div class="tab-content">
                <h4>FTP Connections</h4> <br>
                @include('frontend.user.hostbucket.host_panel.common.flash_message')
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <p>
                                        Add and configure FTP Accounts to get your website on the internet fast.
                                        You can use an FTP client to manage your website’s files.
                                    </p><br>


                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <div class="modal fade" id="delete_APIBuilderSEQ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Repository</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" method="post"></form>
                                                                    {{csrf_field()}}
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div style="background-image: url('http://localhost:8000/images/repo.png');height: 100px;background-repeat: no-repeat;background-size: contain;background-position: center;margin-bottom: 20px;"></div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <h4 style="font-size: 19px;padding-top: 20px;">Are you sure delete this repo "delete_APIBuilderSEQ" ?</h4>

                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" class="form-control" value="APIBuilderSEQ" name="delete_repo" required="">
                                                                    <input type="hidden" class="form-control" value="/home/ruwankavinga//public_html" name="repo_path" required="">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-danger">Delete This Repo</button>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table table-hover table-bordered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>TYPE</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($ftp_details as $ftpacc)
                                                                <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne_APIBuilderSEQ">
                                                                    <td class="expand-button">{{$ftpacc->user}}</td>
                                                                    <td>{{$ftpacc->type}}</td>
                                                                    <td>
                                                                        <a href="http://localhost:8000/hostbucket/hostpanel/git_deployment/1/manageGitRepo/APIBuilderSEQ" class="btn btn-primary btn-xs">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <a href="" class="btn btn-danger btn-xs" data-target="#delete_ftp_{{$ftpacc->user}}" data-toggle="modal">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                @include('frontend.user.hostbucket.host_panel.dialogs.delete_ftp')
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('frontend.user.hostbucket.create_ftp_account',$hosting_details->id)}}" method="post">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label>Login</label>
                                            <input type="text" class="form-control" name="login" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Re-type Password</label>
                                            <input type="text" class="form-control" required>
                                        </div>

                                        <label>FTP Path</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">/home/{{$hosting_details->username}}</span>
                                            </div>
                                            <input type="text" name="ftp_path" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Quota Type</label><br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="unlimited" value="no" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadioInline1">Limited</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="unlimited" value="yes" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Unlimited</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Quota Limit (MB)</label>
                                            <input type="number" id="quota_limit" class="form-control" name="quota_limit" value="100" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Create FTP</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        @push('after-script')
        $("#customRadioInline1").change(function() {
            if(this.checked) {
                $('#quota_limit').prop( "disabled", false );
            }
        });

        $("#customRadioInline2").change(function() {
            if(this.checked) {
                $('#quota_limit').prop( "disabled", true );
            }
        });
        @endpush
    </script>




@endsection
