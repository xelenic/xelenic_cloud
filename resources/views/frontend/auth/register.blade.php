@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')

    @extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="login_panel/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login_panel/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="login_panel/css/style.css">
    <link rel="stylesheet" href="social/style.css">

    <style>

        #myCanvas {
            width: 100%;
            height: 100%;
        }
    </style>



    <div class="">
        <div class="container">
            <div class="" style="margin-top: 90px;margin-bottom: 30px;">
                <!-- <div class="col-md-6 order-md-2">
                  <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div> -->
                <div class="">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 60px;">
                            <div style="height: 250px;background-image: url('https://simplemaps.com/static/demos/resources/svg-library/svgs/world.svg');background-size: contain;background-repeat: no-repeat;margin-top: 50px;">
                                <h4 style="font-size: 40px;color: #797979;">Accelerate your transformation with <b>Xelenic</b></h4>
                                <p style="font-size: 28px;">Build apps faster, make smarter business decisions, and connect people anywhere.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-block" style="">
                                <div class="mb-4">
                                    <h3>Sign In to <strong>Xelenic</strong></h3>
                                    <p class="mb-4">Make your bussiness idea with xelnic cloud. Xelenic has Telcofly has the best flexiable pricing plans among others. </p>
                                </div>
                                <form action="{{ route('frontend.auth.register.post')}}" method="post">
                                    {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group first field--not-empty">
                                                <label for="username">First Name</label>
                                                <input name="first_name" type="text" class="form-control" id="first_name" autocomplete="off">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group first field--not-empty">
                                                <label for="username">Last Name</label>
                                                <input name="last_name" type="text" class="form-control" id="last_name" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group first field--not-empty">
                                        <label for="username">Username</label>
                                        <input name="email" type="text" class="form-control" id="username" autocomplete="off">
                                    </div>
                                    <div class="form-group last mb-4 field--not-empty">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password">

                                    </div>

                                    <div class="form-group last mb-4 field--not-empty">
                                        <label for="password">Password Confirmation</label>
                                        <input name="password_confirmation" type="password" class="form-control" id="password">
                                    </div>


                                    @if(config('access.captcha.registration'))
                                        <div class="row">
                                            <div class="col">
                                                @captcha
                                                {{ html()->hidden('captcha_status', 'true') }}
                                            </div><!--col-->
                                        </div><!--row-->
                                    @endif




                                    <div class="d-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                            <input type="checkbox" checked="checked" name="remember">
                                            <div class="control__indicator"></div>
                                        </label>
                                        <span class="ml-auto"><a href="{{ route('frontend.auth.password.reset') }}" class="forgot-pass">Forgot Password</a></span>
                                    </div>

                                    <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                                    <span class="d-block text-center my-4 text-muted"> or sign in with</span>

                                    <div class="social-login text-center">
                                        <div class="row">
                                            @include('frontend.auth.includes.socialite')
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="login_panel/js/jquery-3.3.1.min.js"></script>
    <script src="login_panel/js/popper.min.js"></script>
    <script src="login_panel/js/bootstrap.min.js"></script>
    <script src="login_panel/js/main.js"></script>
    </body>
    </html>
@endsection

@push('after-scripts')
@if(config('access.captcha.login'))
    @captchaScripts
@endif
@endpush