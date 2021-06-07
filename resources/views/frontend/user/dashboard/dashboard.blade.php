@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">

        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.user.dashboard.section.dashboard_card')
            <div class="row">


            </div>
        </div>
    </div>

@endsection
