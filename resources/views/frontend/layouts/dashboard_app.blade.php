<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Xelenic - Cloud Platform for APIs and Web Website</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="_token" content="{{csrf_token()}}" />
    <link href="{{url('FrontDashboard/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('FrontDashboard/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('FrontDashboard/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('FrontDashboard/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/wizard.css')}}" rel="stylesheet" type="text/css">
</head>

<style>
    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
    }
    #myDiv {
        display: none;
        /*text-align: center;*/
    }
    .nav.nav-tabs .nav-link.active{
        border-color: #0086ff !important;
    }
</style>

<body onload="myFunction()" style="margin:0;">

    <div id="loader">
        <img src="{{url('images/preloader.gif')}}">
    </div>

    <div class="hk-wrapper hk-vertical-nav" style="display:none;position: relative;" id="myDiv">

        @include('frontend.includes.dashboard_nav')
        @include('frontend.includes.dashboard_search')
        @include('frontend.includes.dashboard_sidebar')
        @yield('content')


    </div>

    <script>
        var myVar;
        function myFunction() {
            myVar = setTimeout(showPage, 500);
        }
        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>


    <script src="{{url('FrontDashboard/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/froogaloop2.min.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/gallery-data.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/jquery.slimscroll.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/toggle-data.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/feather.min.js')}}"></script>
    <script src="{{url('FrontDashboard/dist/js/init.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/echarts/dist/echarts-en.min.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/morris.js/morris.min.js')}}"></script>
    <script src="{{url('FrontDashboard/vendors/raphael/raphael.min.js')}}"></script>
    <script>
        @stack('after-script')
    </script>

</body>

</html>