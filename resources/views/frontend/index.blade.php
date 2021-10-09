@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <section class="" id="home" style="background: #4d90fe;padding-top: 50px;">



        <div class="container">
            <div id="particles-js" style="position: absolute;width: 420px;height: 260px;"></div>




            <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
            <script src='https://threejs.org/examples/js/libs/stats.min.js'>
            </script>
            <script>
                /* ---- particles.js config ---- */

                particlesJS("particles-js", {
                    "particles": {
                        "number": {
                            "value": 50,
                            "density": {
                                "enable": true,
                                "value_area": 400
                            }
                        },
                        "color": {
                            "value": "#ffffff"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                                "width": 0,
                                "color": "#000000"
                            },
                            "polygon": {
                                "nb_sides": 5
                            },
                            "image": {
                                "src": "img/github.svg",
                                "width": 100,
                                "height": 100
                            }
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": false,
                            "anim": {
                                "enable": false,
                                "speed": 1,
                                "opacity_min": 0.1,
                                "sync": false
                            }
                        },
                        "size": {
                            "value": 3,
                            "random": true,
                            "anim": {
                                "enable": false,
                                "speed": 40,
                                "size_min": 0.1,
                                "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#ffffff",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 6,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                            "attract": {
                                "enable": false,
                                "rotateX": 600,
                                "rotateY": 1200
                            }
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "grab"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                                "distance": 140,
                                "line_linked": {
                                    "opacity": 1
                                }
                            },
                            "bubble": {
                                "distance": 400,
                                "size": 40,
                                "duration": 2,
                                "opacity": 8,
                                "speed": 3
                            },
                            "repulse": {
                                "distance": 200,
                                "duration": 0.4
                            },
                            "push": {
                                "particles_nb": 4
                            },
                            "remove": {
                                "particles_nb": 2
                            }
                        }
                    },
                    "retina_detect": true
                });


                /* ---- stats.js config ---- */

            </script>
            <div class="row">
                <div class="col-md-6">
                    <div class="" style="margin-top: 60px;font-size: 53px;line-height: normal;color: white;font-weight: 600;padding: 10px;">
                        Welcome to Xelenic
                    </div>
                    <p style="color: white;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    </p>
                    <a class="btn btn-primary pull-right" style="color: white">Get started</a>
                </div>
                <div class="col-md-6">
                    <div class="" style="background-image: url('FrontPage/img/logo.png');height: 396px;background-repeat: no-repeat;background-position: center;background-size: contain;margin-top: 60px;">

                    </div>
                </div>
            </div>
        </div>

        <div class=" flex" style="">

        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </section>
    <!-- End banner Area -->

    <!-- Start brand Area -->
    <section class="brand-area pt-40">
        <div class="container">
            <h3 style="text-align: center">Our Partners</h3>
            <div class="row logo-wrap" style="padding-top: 10px;">
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="FrontPage/img/l1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="FrontPage/img/l2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="FrontPage/img/l3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="FrontPage/img/l4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="FrontPage/img/l5.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <!-- End brand Area -->
    <!-- Start about Area -->

    @include('frontend.home_page_partial.home_page_map')


    <!-- End about Area -->

    <!-- Start service Area -->
    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text">
                    <h1>Some Features that Made us Unique</h1>
                    <p>
                        Who are in extremely love with eco friendly system.
                    </p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h4><span class="lnr lnr-user"></span>Expert Technugal</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h4><span class="lnr lnr-license"></span>Expert Technugal</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h4><span class="lnr lnr-phone"></span>Expert Technugal</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Area -->



    <!-- Start call-action Area -->
    <section class="call-action-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9">
                    <h1 class="text-white">Looking for custom solutions</h1>
                    <p class="text-white pt-20 pb-20">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <a href="url" class="primary-btn header-btn text-uppercase">Request free solution</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End call-action Area -->



    <!-- Start faq Area -->
    <section class="faq-area section-gap" id="faq" style="">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Features That make us Unique</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="counter-left col-lg-3 col-md-3">
                    <div class="single-facts">
                        <h2 class="counter">5962</h2>
                        <p>Projects Completed</p>
                    </div>
                    <div class="single-facts">
                        <h2 class="counter">2394</h2>
                        <p>New Projects</p>
                    </div>
                    <div class="single-facts">
                        <h2 class="counter">1439</h2>
                        <p>Tickets Submitted</p>
                    </div>
                    <div class="single-facts">
                        <h2 class="counter">933</h2>
                        <p>Cup of Coffee</p>
                    </div>
                </div>
                <div class="faq-content col-lg-9 col-md-9">
                    <div class="single-faq">
                        <h2>
                            Are your Templates responsive?
                        </h2>
                        <p>
                            “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                        </p>
                    </div>
                    <div class="single-faq">
                        <h2>
                            Does it have all the plugin as mentioned?
                        </h2>
                        <p>
                            “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                        </p>
                    </div>
                    <div class="single-faq">
                        <h2>
                            Can i use the these theme for my client?
                        </h2>
                        <p>
                            “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
