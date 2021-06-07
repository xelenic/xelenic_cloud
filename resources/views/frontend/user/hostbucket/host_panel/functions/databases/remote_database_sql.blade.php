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
                      'name' =>'Mysql Databases',
                      'url' => route('frontend.user.hostbucket.host_panel',$hosting_details->id),
                      'is_active' => null
                  ]
           ]
          ])
        </div>
        <div class="container-fluid mt-xl-50 mt-sm-30 mt-15 px-xxl-65 px-xl-20">
        @include('frontend.user.hostbucket.host_panel.common.tools_nav')
            <div class="tab-content">

                <div class="tab-pane active" id="tabs-1" role="tabpanel">

                    @include('frontend.user.hostbucket.host_panel.sections.remote_sql_databae')


                </div>
            </div>
        </div>
    </div>




@endsection
