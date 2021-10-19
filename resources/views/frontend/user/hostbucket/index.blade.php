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
                  ]
           ]
          ])




            @if(Session::has('error_message'))
                <div class="alert alert-warning alert-wth-icon alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading mb-5">Something wrong</h4>
                    <p>Something wrong with your Xelenic Hostbucket System, We will fix as soon as possible.Stay with us</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @endif

            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <a href="{{route('frontend.user.hostbucket.create')}}">
                        <div class="" style="border-style: dashed;border-color: grey;padding: 90px;text-align: center;border-width: 2px;">
                            Create a Hostbucket
                        </div>
                    </a>
                </div>

                @foreach($hostbucket_details as $hostbucket)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <a href="#">
                            <div class="card">
                                <div class="card-header">
                                    <p style="color: dimgrey;">{{$hostbucket->bucket_name}}- Key {{$hostbucket->server_key}}</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p style="color: dimgrey;"><b>Status:</b> <span style="">{{$hostbucket->status}}</span></p>
                                                        <p style="color: dimgrey;"><b>IP</b> <span style="">{{$hostbucket->ip}}</span></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        @if($hostbucket->cpanel_api_details)
                                                            <p style="color: dimgrey;"><b>XePanel:</b> <span style="background: #4d90fe;padding: 7px;border-radius: 8px;color: white;font-size: 11px;padding-top: 4px;padding-bottom: 4px;">Active</span></p>
                                                            @if(\App\Models\Website::where('hostbucket_id',$hostbucket->id)->first())
                                                               <div>
                                                                   <p style="font-size: 12px;margin-top: 5px;background:#8bc34a ;color: white;text-align: center;padding: 3px;border-radius: 6px;">{{\App\Models\Website::where('hostbucket_id',$hostbucket->id)->first()->name}}</p>
                                                               </div>

                                                            @else
                                                                <p style="">SQL Injection</p>
                                                            @endif

                                                            <p style="color: dimgrey;font-size: 12px;padding-top: 14px;"><b></b>

                                                        @else
                                                            <p style="color: dimgrey;"><b>XePanel:</b> <span style="background: #fe0e00;padding: 7px;border-radius: 8px;color: white;font-size: 11px;padding-top: 4px;padding-bottom: 4px;">Pending</span></p>


                                                            <p style="color: dimgrey;font-size: 12px;padding-top: 8px;"><b>Still Xepanel Pending?</b>
                                                            <div style="background: #9c9c9c;padding: 7px;border-radius: 8px;color: white;font-size: 11px;padding-top: 4px;padding-bottom: 4px;text-align: center;">Ask from Xelenic Support</div></p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <div class="btn-group btn-group-xs mb-25" role="group" aria-label="Basic example">
                                                        @if($hostbucket->cpanel_api_details)
                                                            <a href="{{ route('frontend.user.hostbucket.host_panel',$hostbucket->id)}}" type="button" class="btn btn-primary" style="padding-top: 6px;">HostPanel</a>
                                                        @else

                                                        @endif
                                                        <button type="button" class="btn btn-secondary">Billing</button>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 12px;">
                                                                    Connection
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <button class="dropdown-item" type="button"  data-toggle="modal" data-target="#publsih_website_panel_{{$hostbucket->id}}">Publish your Website</button>
                                                                    <button class="dropdown-item" type="button">RQL</button>
                                                                </div>
                                                            </div>
                                                            <form method="POST" action="{{route('frontend.user.hostbucket.login_cpanel',$hostbucket->id)}}" target="_blank">
                                                                {{csrf_field()}}
                                                                <button type="submit" class="btn btn-secondary" style="font-size: 13px;border-radius: 0px;background: #ff4d15;border-color: #f44336;">Cpanel</button>
                                                            </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Xelenic Builder Connection -->
                    <div class="modal fade" id="publsih_website_panel_{{$hostbucket->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{route('frontend.user.hostbucket.website_project_connect')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$hostbucket->bucket_name}} Website Connection</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" value="{{$hostbucket->id}}" name="hostbucket_id">
                                       <label>Website Project:</label>
                                        <select name="website_id" class="form-control">
                                            @foreach(\App\Models\Website::where('user_id',auth()->user()->id)->get() as $website_details)
                                                <option value="{{$website_details->id}}">{{$website_details->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Connect</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>



    </div>


@endsection
