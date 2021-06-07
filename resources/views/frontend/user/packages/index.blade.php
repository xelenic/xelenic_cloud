@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">
        @include('frontend.breadcums.breadcums',[
           'breadcrumb' => [
                   [
                       'name' =>'Credit Total',
                       'url' => route('frontend.user.credit_total'),
                       'is_active' => null
                   ],
                   [
                       'name' =>'Packages',
                       'url' => route('frontend.user.credit_packages'),
                       'is_active' => 'yes'
                   ]
            ]
           ])

        <div class="container-fluid px-xxl-65 px-xl-20"><br><br>
            <div class="row">
                @foreach($packages as $package)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="card bg-light">
                            <div class="card-header">
                                <div class="d-flex">
                                    Packages
                                    @if($package->offer_price)
                                        <span class="badge badge-info" style="margin-left: 10px;">Special Offer</span>
                                    @else

                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center">{{$package->package_name}}</h5>
                                <p class="card-text" style="text-align: center">{{$package->package_description}}</p>

                                <div class="" style="text-align: center">
                                    @if($package->offer_price)
                                        <h4 style="text-decoration: line-through;">${{number_format($package->price,2)}}</h4>
                                        <h2>${{number_format($package->offer_price,2)}}</h2>
                                    @else
                                        <br>
                                        <h4 style="text-decoration: line-through;">${{number_format($package->price,2)}}</h4>
                                    @endif
                                    <br>
                                <div class="" style="background-image: url('{{url('images/dollar.svg')}}');height: 100px;background-position: center;background-repeat: no-repeat;background-size: contain"></div>
                                        <h5>(Xe) Credits:</h5>
                                        <h2>{{number_format($package->credits,2)}}</h2><br>
                                        <form action="{{route('frontend.user.credit_packages.purchase')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$package->id}}" name="package_id">
                                            <button type="submit" class="btn btn-success">Purchase This</button>

                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
