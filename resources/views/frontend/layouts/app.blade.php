
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="FrontPage/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Xelenic - Simple and Flexible Cloud Solution</title>


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="{{url('FrontPage/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('FrontPage/css/main.css')}}">
    <script src="{{url('')}}"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; // remove the gap so it doesn't close
        }
    </style>
<body>
<header id="header" id="home" style="background-color: #4d90fe !important;padding-bottom: unset;position: fixed;width: -webkit-fill-available;z-index: 3;">
    <div class="container" style="">
        @include('frontend.includes.home_page_navbar')
    </div>
</header>
</div>

<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }


</script>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>


<style>
    @import  url(//fonts.googleapis.com/css?family=Lato:300:400);

    body {
        margin:0;
    }

    h1 {
        font-weight:300;
        letter-spacing: 2px;
        font-size:48px;
    }
    p {
        letter-spacing: 1px;
        font-size:14px;
    }

    .header {
        position:relative;
        text-align:center;
        background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
        color:white;
    }
    .logo {
        width:50px;
        fill:white;
        padding-right:15px;
        display:inline-block;
        vertical-align: middle;
    }

    .inner-header {
        height:65vh;
        width:100%;
        margin: 0;
        padding: 0;
    }

    .flex { /*Flexbox for containers*/
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .waves {
        position:relative;
        width: 100%;
        height:15vh;
        margin-bottom:-7px; /*Fix for safari gap*/
        min-height:100px;
        max-height:150px;
    }

    .content {
        position:relative;
        height:20vh;
        text-align:center;
        background-color: white;
    }

    /* Animation */

    .parallax > use {
        animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
    }
    .parallax > use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }
    .parallax > use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }
    .parallax > use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }
    .parallax > use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }
    @keyframes  move-forever {
        0% {
            transform: translate3d(-90px,0,0);
        }
        100% {
            transform: translate3d(85px,0,0);
        }
    }
    /*Shrinking for mobile*/
    @media (max-width: 768px) {
        .waves {
            height:40px;
            min-height:40px;
        }
        .content {
            height:30vh;
        }
        h1 {
            font-size:24px;
        }
    }
</style>

<!-- start banner Area -->
@yield('content')


<!-- start footer Area -->
<footer class="footer-area section-gap" style="background-color: #4d90fe;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget">
                    <h6>Top Products</h6>
                    <ul class="footer-nav">
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  col-md-12">
                <div class="single-footer-widget newsletter">
                    <h6>Newsletter</h6>
                    <p>You can trust us. we only send promo offers, not a single spam.</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                            <div class="form-group row" style="width: 100%">
                                <div class="col-lg-8 col-md-12">
                                    <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="FrontPage/img/i1.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i2.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i3.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i4.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i5.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i6.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i7.jpg" alt=""></li>
                        <li><img src="FrontPage/img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer-social d-flex align-items-center">
                <a href="https://www.facebook.com/icovden/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{url('FrontPage/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{url('FrontPage/js/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{url('FrontPage/js/easing.min.js')}}"></script>
<script src="{{url('FrontPage/js/hoverIntent.js')}}"></script>
<script src="{{url('FrontPage/js/superfish.min.js')}}"></script>
<script src="{{url('FrontPage/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('FrontPage/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('FrontPage/js/owl.carousel.min.js')}}"></script>
<script src="{{url('FrontPage/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('FrontPage/js/jquery.counterup.min.js')}}"></script>
<script src="{{url('FrontPage/js/waypoints.min.js')}}"></script>
<script src="{{url('FrontPage/js/mail-script.js')}}"></script>
<script src="{{url('FrontPage/js/main.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



