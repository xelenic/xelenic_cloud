

<!DOCTYPE html><html lang="en" >


<!-- begin::Head -->
<head><!--begin::Base Path (base relative path for assets of this page) -->
    <base href="{{ url('backend/assets/builder/builder')}}"><!--end::Base Path -->
    <meta charset="utf-8" />
    <title>Xelenic Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content=""/>

    <!-- App favicon -->
    <link rel="icon" href="">

    <!-- It is for needs of builder -->
    <link href="{{url('backend/assets/builder/css/iframe_font.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/bootstrap.weber.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/fx.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/spectrum.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/masonryfilter.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/aos.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/codemirror.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/fonts.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/iframe.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/preloader.css')}}" />

</head>

<body class="run">
<script src="{{url('backend/assets/builder/js/lib/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/owl.carousel_builder.js')}}"></script>
<div class="main font-style-supra">
    <style></style>
</div>




<script id="global-script"></script>
<script src="{{url('backend/assets/builder/js/lib/popper.min.js')}}"></script>
<!-- Latest 3.2.x goodshare.js minify version from jsDelivr CDN -->
<script src="{{url('backend/assets/builder/js/lib/goodshare.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/instafeed.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/twitterFetcher.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.smooth-scroll.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.validate.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.nicescroll.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.custom-file-input.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.mask.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/countUp-jquery.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.vide_builder.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/skrollr.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/aos.js')}}"></script>
<script>
    AOS.init();
    //    $(document).on('click', 'a', function (e) {
    //        if (/\.html/.test(this.getAttribute('href')))
    //            e.preventDefault();
    //    });
    //for cookie dependent files
    var pAgree = '1';

    //    $(document.body).niceScroll({
    //        cursorcolor: "#555555"
    //        , cursorborder: "1px solid #555555"
    //        , autohidemode: "scroll"
    //        , hidecursordelay: 0
    //    });
    window.onbeforeunload = function() {
        return "Did you save your stuff?"
    }
</script>
<script src="{{url('backend/assets/builder/js/lib/rellax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=87987na8sd79a87d9sada"></script>

<script src="{{url('backend/assets/builder/js/lib/tether.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/bootstrap.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/spectrum.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/libraty.js')}}"></script>

<script src="{{url('backend/assets/builder/js/lib/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.countdown.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.masonryfilter.js')}}"></script>
</body>
</html>
