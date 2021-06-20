@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <div class="" style="background-image: url('{{url('images/xelenic_cloud.png')}}');height: 250px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>

    <select class="form-control" name="option">
        <option>HostBucket</option>
        <option>Business Intelligence Service</option>
        <option>HTML Builder</option>
        <option>CI/CD Cloud Function</option>
        <option>Mail Service</option>
        <option>Pentoa Server</option>
        <option>Load Management</option>
        <option>Cloud Base</option>
        <option>Cloud AI</option>
    </select>
    <br>
    <div class="" style="text-align: center">
        @auth
            <a href="{{route('frontend.auth.login')}}" class="btn btn-primary" style="text-align: center">Start Now</a>
        @else
            <a href="{{route('frontend.auth.login')}}" class="btn btn-primary" style="text-align: center">Start Now</a>
        @endauth
        <button class="btn btn-primary" style="text-align: center">Documentation</button>
        <button class="btn btn-primary" style="text-align: center">Reseller API</button>
    </div>

@endsection
