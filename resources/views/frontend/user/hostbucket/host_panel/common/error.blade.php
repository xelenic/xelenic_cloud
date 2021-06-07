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
                  ]

           ]
          ])
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                <div class="" style="padding-top: 60px;text-align: center">
                    <h3 style="text-align: center;color: grey;">Server connection not responding </h3>
                    <p style="text-align: center">Hostbucket Servers cannot connect this time</p>
                    <div style="background-image: url('{{url('images/error.jpg')}}');height: 300px;background-repeat: no-repeat;background-size: contain;background-position: center;"></div>
                    <a  class="btn btn-primary" style="text-align: center" href="{{url()->previous()}}">Re-Connect Your Server</a>
                </div>
            </div>
        </div>
    </div>
    </div>




@endsection
