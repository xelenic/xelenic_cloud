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
                                        <div class="col-md-4">
                                            <div style="background-image: url('{{url('images/vps.svg')}}');height: 100px;background-size: contain;background-repeat: no-repeat;background-position: center;"></div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="">
                                                <p style="color: dimgrey;"><b>Status:</b> <span style="">{{$hostbucket->status}}</span></p>
                                                <p style="color: dimgrey;"><b>IP</b> <span style="">{{$hostbucket->ip}}</span></p>
                                                </p>

                                                <br>
                                                <div class="">
                                                    <div class="btn-group btn-group-xs mb-25" role="group" aria-label="Basic example">
                                                        @if($hostbucket->cpanel_api_details)
                                                            <a href="{{ route('frontend.user.hostbucket.host_panel',$hostbucket->id)}}" type="button" class="btn btn-primary">HostPanel</a>
                                                        @else

                                                        @endif
                                                        <button type="button" class="btn btn-secondary">Billing</button>
                                                        <button type="button" class="btn btn-secondary">Connections</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>



    </div>


@endsection
