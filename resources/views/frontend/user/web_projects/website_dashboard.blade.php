@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">
        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.breadcums.breadcums',[
          'breadcrumb' => [
                  [
                      'name' =>'Website Projects',
                      'url' => route('frontend.user.website_project'),
                      'is_active' => 'yes'
                  ],
                  [
                      'name' =>'Dashboard',
                      'url' => route('frontend.user.website_project'),
                      'is_active' => 'yes'
                  ]
           ]
          ])


           @include('frontend.user.web_projects.section.dashboard_nav')

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Visits</span>
                            <div class="d-flex align-items-end justify-content-between">
                                <div>
                                    <span class="d-block">
                                        <span class="display-5 font-weight-400 text-dark">00</span>
                                        <small>Users</small>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-success font-12 font-weight-600">0%</span>
                                </div>
                            </div>
                            <div class="progress progress-bar-xs mt-30">
                                <div class="progress-bar bg-success w-0" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Server Limit</span>
                            <div class="d-flex align-items-end justify-content-between">
                                <div>
                                    <span class="d-block">
                                        <span class="display-5 font-weight-400 text-dark">0%</span>
                                        <small>Users</small>
                                    </span>
                                </div>

                            </div>
                            <div class="progress progress-bar-xs mt-30">
                                <div class="progress-bar bg-success w-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Visits</span>
                            <div class="d-flex align-items-end justify-content-between">
                                <div>
                                    <span class="d-block">
                                        <span class="display-5 font-weight-400 text-dark">12,725</span>
                                        <small>Users</small>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-success font-12 font-weight-600">+5%</span>
                                </div>
                            </div>
                            <div class="progress progress-bar-xs mt-30">
                                <div class="progress-bar bg-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section class="hk-sec-wrapper">
                        <h6 class="hk-sec-title">Single Line Chart</h6>
                        <div class="row">
                            <div class="col-sm">
                                <div id="m_chart_2" class="" style="height:294px;"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection


<script>
    /*Dashboard Init*/

    "use strict";

    /*****Ready function start*****/
    @push('after-script')

    $(document).ready(function(){
        if($('#m_chart_2').length > 0)
            Morris.Line({
                element: 'm_chart_2',
                data: [{
                    period: '2010',
                    iphone: 50,
                }, {
                    period: '2011',
                    iphone: 130,
                }, {
                    period: '2012',
                    iphone: 80,
                }, {
                    period: '2013',
                    iphone: 70,
                }, {
                    period: '2014',
                    iphone: 180,
                }, {
                    period: '2015',
                    iphone: 105,
                },
                    {
                        period: '2016',
                        iphone: 250,
                    }],
                xkey: 'period',
                ykeys: ['iphone'],
                labels: ['iPhone'],
                pointSize: 3,
                fillOpacity: 0,
                lineWidth:2,
                pointFillColors:['#fff'],
                pointStrokeColors:['#22af47'],
                behaveLikeLine: true,
                hideHover: 'auto',
                gridLineColor: '#eaecec',
                lineColors: ['#22af47'],
                resize: false,
                smooth:false,
                gridTextColor:'#5e7d8a',
                gridTextFamily:"Inherit"

            });
    });
    @endpush

</script>
