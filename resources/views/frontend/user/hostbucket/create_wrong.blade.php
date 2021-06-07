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
                      'name' =>'Create',
                      'url' => route('frontend.user.hostbucket.create'),
                      'is_active' => 'yes'
                  ],
                   [
                      'name' =>'Host Bucket Create Fail (Validating Issue)',
                      'url' => route('frontend.user.hostbucket.create'),
                      'is_active' => 'yes'
                  ]
           ]
          ])
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6">
                    <div class="card">
                        <h6 class="card-header border-0">
                            <div style="color: grey">
                                <i class="fa fa-cloud" style="padding-right: 10px;"></i> Server Details
                            </div>
                        </h6>
                        <div class="card-body pa-0">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <tbody id="server_details_summery">
                                        <tr>
                                            <th class="w-70" scope="row">Storage</th>
                                            <th class="w-30" scope="row">{{$packageDetails->quota}} MB</th>
                                            </tr>
                                        <tr>
                                            <th class="w-70" scope="row">Max FTP</th>
                                            <th class="w-30" scope="row">{{$packageDetails->maxftp}} </th>
                                            </tr>
                                        <tr>
                                            <th class="w-70" scope="row">Brand Width Limit</th>
                                            <th class="w-30" scope="row">{{$packageDetails->bwlimit}} MB</th>
                                            </tr>
                                        <tr>
                                            <th class="w-70" scope="row">Max SQL</th>
                                            <th class="w-30" scope="row">{{$packageDetails->maxsql}}</th>
                                            </tr>
                                        <tr>
                                            <th class="w-70" scope="row">Database</th>
                                            <th class="w-30" scope="row">{{$packageDetails->database}}</th>
                                            </tr>
                                        <tr>
                                            <th class="w-70" scope="row">SSL</th>
                                            <th class="w-30" scope="row">{{$packageDetails->ssl}}</th>
                                            </tr>
                                        <tr>
                                        <tr>
                                            <th class="w-70" scope="row">Cpanel</th>
                                            <th class="w-30" scope="row">Cpanel</th>
                                        </tr>
                                        </tbody>
                                        <tfoot id="cost_calulation">
                                        <tr class="bg-light">
                                            <th class="text-dark text-uppercase" scope="row">Cost</th>
                                            <th class="text-dark font-18" scope="row">24H / $0.006</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{route('frontend.user.hostbucket.create_hostbucket')}}" method="post">
                        {{csrf_field()}}
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Server Name</label>
                                            <input type="hidden" name="estimated_cost_input" value="{{$estimated_cost_input}}">
                                            <input type="hidden" name="package_name" value="{{$package_name}}">
                                            <input type="hidden" name="xelenic_panel" value="{{$xelenic_panel}}">
                                            <input type="hidden" name="conform_host_password" value="{{$conform_host_password}}">
                                            <input type="hidden" name="billing_type" value="{{$billing_type}}">
                                            <input type="hidden" name="control_panel_type" value="{{$control_panel_type}}">
                                            <input type="hidden" name="estimated_value" value="{{$estimated_value}}">


                                            @if($errors->has('bucket_name'))
                                                <input type="text" name="bucket_name" class="form-control" style="border-color: red" value="{{$bucket_name}}" required>
                                            @else
                                                <input type="text" name="bucket_name" class="form-control" style="" value="{{$bucket_name}}" required>
                                            @endif
                                            @if($errors->has('bucket_name'))
                                                <div class="error" style="color: red">{{ $errors->first('bucket_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Domain Name</label>
                                            @if($errors->has('domain_name'))
                                                <input type="text" name="domain_name" style="border-color: red" class="form-control" value="{{$domain_name}}" required>
                                            @else
                                                <input type="text" name="domain_name" class="form-control" value="{{$domain_name}}" required>
                                            @endif
                                            @if($errors->has('domain_name'))
                                                <div class="error" style="color: red">{{ $errors->first('domain_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Support Email</label>
                                            @if($errors->has('support_email'))
                                                <input type="text" name="support_email" style="border-color: red;" class="form-control" value="{{$support_email}}" required>
                                            @else
                                                <input type="text" name="support_email" class="form-control" value="{{$support_email}}" required>
                                            @endif
                                            @if($errors->has('support_email'))
                                                <div class="error" style="color: red">{{ $errors->first('support_email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            @if($errors->has('username'))
                                                <input type="text" name="username" class="form-control" style="border-color: red" value="{{$username}}" required>
                                            @else
                                                <input type="text" name="username" class="form-control" value="{{$username}}" required>

                                            @endif
                                            @if($errors->has('username'))
                                                <div class="error" style="color:red;">{{ $errors->first('username') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            @if($errors->has('password'))
                                                <input type="text" name="password" class="form-control" style="border-color: red" value="{{$password}}" required>
                                            @else
                                                <input type="text" name="password" class="form-control" value="{{$password}}" required>
                                            @endif
                                            @if($errors->has('password'))
                                                <div class="error" style="color: red">Your password must be more then 8 characters long, should contain at-lest 1 Uppercase 1 LowerCase 1 numeric and 1 special character</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card=body">
                                <div class="container">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <tbody id="server_details_summery">
                                                <tr>
                                                    <th class="w-70" scope="row">Day Cost</th>
                                                    <th class="w-30" scope="row">$ {{json_decode($estimated_cost_input)->day_cost}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="w-70" scope="row">Estimate Cost</th>
                                                    <th class="w-30" scope="row">$ {{number_format($estimated_value,2)}}</th>
                                                </tr>

                                                <tr>
                                                    <th class="w-70" scope="row">Estimated Running Days</th>
                                                    <th class="w-30" scope="row">{{json_decode($estimated_cost_input)->days}} Days</th>
                                                </tr>
                                                <tr>
                                                    <th class="w-70" scope="row">Server Expire Date</th>
                                                    <th class="w-30" scope="row">{{json_decode($estimated_cost_input)->estimate_date}}</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit Correction</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
