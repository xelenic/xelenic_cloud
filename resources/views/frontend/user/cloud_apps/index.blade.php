@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">

        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.breadcums.breadcums',[
            'breadcrumb' => [
                    [
                        'name' =>'Credit Total',
                        'url' => route('frontend.user.credit_total'),
                        'is_active' => 'yes'
                    ]
             ]
            ])

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb-20">
                        <div style="background-image: url('{{url('images/cloud_app/db_api.png')}}');height: 200px;background-size: cover;background-repeat: no-repeat;background-position: center;"></div>
                        <div class="card-body">
                            <h5 class="card-title">DB API Builder</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <button class="btn btn-secondary btn-sm">Install</button>
                            <button class="btn btn-secondary btn-sm">Documentation</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
