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
                       'name' =>'View Credit Purchase Invoice',
                       'url' => route('frontend.user.credit_total.view_billing_invoice',$get_invoice->id),
                       'is_active' => 'yes'
                   ]
            ]
           ])


        <div class="container-fluid px-xxl-65 px-xl-20">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12">
                    <div class="card">
                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
                        <div class="container">

                            <div class="container ">
                                <div class="row mt-4">
                                    <div class="col-12 col-lg-10 offset-lg-1">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div>
                                                    <span class="text-sm text-grey-m2 align-middle">To:</span>
                                                    <span class="text-600 text-110 text-blue align-middle">{{$userDetails->first_name}} {{$userDetails->last_name}}</span>
                                                </div>
                                                <div class="text-grey-m2">
                                                    <div class="my-1">
                                                        {{$userDetails->email}}
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                <hr class="d-sm-none" />
                                                <div class="text-grey-m2">
                                                    <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                                        Invoice
                                                    </div>

                                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> {{$get_invoice->id}}</div>

                                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span>{{$get_invoice->created_at}}</div>

                                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status: </span> <span class="badge badge-success badge-pill px-25">Paid</span></div>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>

                                        <div class="table-wrap" style="margin-top: 20px;margin-bottom: 50px;">
                                            <div class="table-responsive">
                                                <table class="table table-primary table-bordered mb-0">
                                                    <thead class="thead-primary">
                                                    <tr>
                                                        <th>Package Name</th>
                                                        <th>Purchased Credits</th>
                                                        <th>Price</th>
                                                        <th>Payment Type</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">{{$get_invoice->package_name}}</th>
                                                            <td>Xe {{number_format($get_invoice->credits,2)}}</td>
                                                            <td>USD {{number_format($get_invoice->price,2)}}</td>
                                                            <td><span class="badge badge-success">{{$get_invoice->payment_type}}</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 style="color: #484848;font-size: 20px">Invoice ID: #{{$get_invoice->id}}</h4>
                                                <h4 style="color: #484848;font-size: 20px">Sub Total: {{number_format($get_invoice->price,2)}}</h4>
                                                <h4 style="color: #484848;font-size: 20px">Total: {{number_format($get_invoice->price,2)}}</h4>
                                            </div>
                                        </div><br><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('frontend.user.credit_total')}}" class="btn btn-primary pull-right">Back</a>

                </div>
            </div>
        </div>
    </div>
@endsection
