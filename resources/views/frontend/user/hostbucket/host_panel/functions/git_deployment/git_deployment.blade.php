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
                    [
                      'name' =>$hosting_details->bucket_name .'- Host Panel',
                      'url' => route('frontend.user.hostbucket.host_panel',$hosting_details->id),
                      'is_active' => null
                  ],
                  [
                      'name' =>'Git Deployment',
                      'url' => route('frontend.user.hostbucket.git_panel',$hosting_details->id),
                      'is_active' => null
                  ],
                   [
                      'name' =>'Git Manage',
                      'url' => route('frontend.user.hostbucket.git_panel',$hosting_details->id),
                      'is_active' => null
                  ]
           ]
          ])
        </div>
        <div class="container-fluid mt-xl-50 mt-sm-30 mt-15 px-xxl-65 px-xl-20">
            @include('frontend.user.hostbucket.host_panel.common.tools_nav')
            <h4>Git Panel</h4> <br>
        @include('frontend.user.hostbucket.host_panel.common.git_nav')

        <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <p>
                                        Use this section of the interface to
                                        review repository information and configure settings and the
                                        currently checked-out branch.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p>Repository Path:</p>
                                    <a href="">{{$repo_info->repository_root}}</a>
                                    <br>
                                    <label>Repository Name</label>
                                    <input type="text" class="form-control">
                                    <p>The repository name may not include the “<” and “>” characters.</p>

                                    <label>Checked-Out Branch</label>
                                    <select class="form-control">
                                        @foreach($repo_info->available_branches as $avl_brnches)
                                            <option value="{{$avl_brnches}}">{{$avl_brnches}}</option>

                                        @endforeach
                                    </select><br>
                                    <a href="" class="btn btn-primary">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <p>Currently Checked-Out Branch:</p>
                                    <a href="">{{$repo_info->branch}} <i class="fa fa-link"></i> </a><br>

                                    <p>HEAD Commit:</p>
                                    <code>DATE: {{$repo_info->last_update->date}}</code><br>
                                    <code>AUTHOR: {{$repo_info->last_update->author}}</code><br>
                                    <code>MESSAGE: {{$repo_info->last_update->message}}</code><br>
                                    <code>HASH: {{$repo_info->last_update->identifier}}</code><br>
                                    <code><a href="">Branch: {{$repo_info->branch}}</a></code>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
