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


            @include('frontend.user.credit_total.section.cards')

            <a href="{{route('frontend.user.credit_packages')}}" class="btn btn-primary pull-right">Purchase Credits</a> <br><br><br>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Credit Purchase Invoice</th>
                                        <th>Package Name</th>
                                        <th>Amount</th>
                                        <th>Credits</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($billingInvoices as $billingInvoice)
                                        <tr>
                                            <td>{{$billingInvoice->created_at}}</td>
                                            <td>{{$billingInvoice->package_name}}</td>
                                            <td>USD {{number_format($billingInvoice->price,2)}}</td>
                                            <td>Xe {{number_format($billingInvoice->credits,2)}}</td>
                                            <td>Success</td>
                                            <td>
                                                <a href="{{route('frontend.user.credit_total.view_billing_invoice',$billingInvoice->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="View Invoice"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
