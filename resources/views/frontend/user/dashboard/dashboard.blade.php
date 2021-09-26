@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">

        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.user.dashboard.section.dashboard_card')

            <div class="card">
                <div class="card-header card-header-action">
                    <h6>Referral Stats</h6>
                    <div class="d-flex align-items-center card-action-wrap">
                        <a href="#" class="inline-block refresh mr-15">
                            <i class="ion ion-md-arrow-down"></i>
                        </a>
                        <a href="#" class="inline-block full-screen">
                            <i class="ion ion-md-expand"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body pa-0">
                    <div class="pa-20">
                        <div id="m_chart_1" style="height: 370px"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    @push('after-script')
    <script>
        $(document).ready(function() {
            setTimeout(function(){
                if($('#m_chart_1').length > 0)
                    Morris.Area({
                        element: 'm_chart_1',
                        data: [{
                            period: '2010',
                            iphone: 100,
                        }, {
                            period: '2011',
                            iphone: 130,
                        }, {
                            period: '2012',
                            iphone: 80,
                        }, {
                            period: '2013',
                            iphone: 120,
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
                        labels: ['iPhone','redlabel'],
                        pointSize: 5,
                        fillOpacity: .03,
                        lineWidth:2,
                        pointStrokeColors:['#fff'],
                        behaveLikeLine: true,
                        hideHover: 'auto',
                        gridLineColor: '#fff',
                        lineColors: ['#4d90fe'],
                        resize: true,
                        smooth:false,
                        gridTextColor:'#343a40',
                        gridTextFamily:"Inherit"

                    });
                }, 1000);
            }
        );


    </script>
    @endpush



@endsection
