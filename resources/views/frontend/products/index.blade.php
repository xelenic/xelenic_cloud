@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <style>
        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            color: #ffffff;
            background-color: #0879de;
            border-style: none;
        }

        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
            border: none;
            /* border-color: #e9ecef #e9ecef #dee2e6; */
        }
    </style>

    <div style="background: #0086ff;height: 370px;color: white !important;margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 style="color: white;font-size: 40px;padding-top: 40px;padding-bottom: 20px;">{{$products_details->product_name}}</h2>
                    <p>{{$products_details->short_description}}</p>

                    <a href="" class="btn btn-primary" style="background: #ff774c;">Get Started with {{$products_details->product_name}}</a>
                    <a href="" class="btn btn-primary" style="background: #ff774c;">Full Documentation</a>
                </div>
                <div class="col-md-4"><br>

                    <div style="background-image: url('{{ url(uploaded_asset($products_details->icon))}}');height: 300px;background-position: center;background-size: contain;background-repeat: no-repeat;">

                    </div>

                </div>
            </div>

        </div>

    </div>

    <section id="tabs">
        <nav style="background: #61b4ff;">
            <div class="container">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="color: white;">
                    <a style="padding-top: 14px;border-radius: revert;" class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">Overview</a>
                    <a style="padding-top: 14px;border-radius: revert;" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Documentation</a>
                    <a style="padding-top: 14px;border-radius: revert;" class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="true">Screenshots</a>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">

                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            {!! $products_details->description !!}
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                        </div>
                        <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
