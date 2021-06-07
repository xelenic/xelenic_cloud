<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head><!--begin::Base Path (base relative path for assets of this page) -->
    <base href="{{ url('backend/assets/builder/builder')}}"><!--end::Base Path -->
    <meta charset="utf-8" />
    <title>Xelenic Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content=""/>

    <!-- App favicon -->
    <link rel="icon" href="">

    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/fx.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/spectrum.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/lib/codemirror.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/fonts.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/main.css')}}" />
    <link rel="stylesheet" href="{{url('backend/assets/builder/css/preloader.css')}}" />

</head>
<body class="first-show">

<script src="{{url('backend/assets/builder/js/lib/jquery-2.1.4.min.js')}}"></script>
<style id="builder-style"></style>
<div class="supra-preloader">
    <img src="{{url('backend/assets/builder/images/logo.svg')}}" style="max-height:150px;" alt=""/>
    <div class="progress-bar-s">
        <div class="progress"><div class="load"></div></div>
    </div>
    <div class="rights">
        <p>&copy; Xelenic</p>
    </div>
</div>

<aside class="left supra black"></aside>
<aside class="control-panel supra black">
    <div class="title d-flex justify-content-between align-items-center">
        <h3>Sections</h3>
        <i class="supra bookmark"></i>
    </div>
    <ul class="sections">
        @foreach ($groups as $key => $node)
            <li data-group="{{$key}}">{{$node['name']}}</li>
        @endforeach
    </ul>
</aside>
<div id="modal-thumb" class="supra">
    <div class="title">Page Models</div>
    <div class="container-thumb"></div>
</div>
<div class="wrap-iframe d-flex justify-content-center align-items-center">
    <div class="wrap viewing-desctop">
        <label>
            <span class="width" contenteditable="true"></span> x <span class="height" contenteditable="true"></span>
            <i class="rotate icon-blr-lg-mobile"></i>
        </label>

        <iframe id="main" src="{{route('frontend.user.larabulder')}}"></iframe>

    </div>
</div>
<div id="modal-container" class="supra"></div>
<div id="modal-project-container" class="supra"></div>
<div id="modal-form-container" class="supra font-style-supra"></div>
<div id="csrf_field" class="csrf_field" style="display: none">{{ csrf_field() }}</div>

<!-- Modal -->
<div class="modal fade" id="download_dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin: auto;margin-top: 60px;width: 790px;">
        <div class="modal-content">
            <div class="modal-body" style="padding-bottom: 0px;">
                <div class="row">
                    <div class="col-md-6" style="padding-left: 0px;">
                        <div style="background-image: url('{{url('/images/xelenic_export.png')}}');height: 528px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                    </div>
                    <div class="col-md-6">
                        <h4>Your Current Credits</h4><br>
                        <div class="row">
                            <div class="col-md-12">
                                    <p style="font-size: 17px;font-weight: 600;border-style: dashed;border-width: 1;border-color: gray;text-align: center;padding: 10px;border-color: gray;color: #4caf50;">Coin Balance: ${{number_format(auth()->user()->credits_value,2)}}</p>
                            </div>
                        </div>

                        <h4>You can export your project</h4><br>
                        <div class="row" style="padding-right: 20px;">
                            <div class="col-md-4" style="padding: 0px">
                                <a style="cursor: hand" class="download_html">
                                    <div class="card" style="padding-top: 20px;" id="">
                                        <div style="background-image: url('{{url('/images/html.png')}}');height: 81px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                        <p style="text-align: center;font-size: 14px;margin-bottom: 0px;">HTML</p>
                                        <p style="text-align: center;font-size: 19px;font-weight: 600;margin: initial;">$5</p>
                                    </div>
                                </a>

                            </div>
                            <div class="col-md-4" style="padding: 0px">
                                <div class="card" style="padding-top:20px;">
                                    <div style="background-image: url('{{url('/images/wordpress.png')}}');height: 81px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                    <p style="text-align: center;font-size: 14px;margin-bottom: 0px;">Wordpress</p>
                                    <p style="text-align: center;font-size: 19px;font-weight: 600;margin: initial;">$40</p>
                                </div>
                            </div>
                            <div class="col-md-4" style="padding: 0px;">
                                <div class="card" style="padding-top: 20px;">
                                    <div style="background-image: url('{{url('/images/laravel.png')}}');height: 81px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                    <p style="text-align: center;font-size: 14px;margin-bottom: 0px;">Laravel</p>
                                    <p style="text-align: center;font-size: 19px;font-weight: 600;margin: initial;">$50</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>

</script>
<script src="{{url('backend/assets/builder/js/lib/popper.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/jquery.nicescroll.min.js')}}"></script>

<script src="{{url('backend/assets/builder/js/lib/tether.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/bootstrap.min.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/spectrum.js')}}"></script>

<script src="{{url('backend/assets/builder/js/lib/codemirror.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/javascript.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/css.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/htmlmixed.js')}}"></script>
<script src="{{url('backend/assets/builder/js/lib/xml.js')}}"></script>

<script>

    var demoMode    =   'no';
    var ajaxbase    =   '{{url("api/ajax")}}';
    var baseurl     =   '{{url("/")}}';
    var basepath    =   'C:\\Users\\DELL\\Documents\\GitRepos\\xelenic_builder\\public\\backend\\assets\\builder';
    var googleKey   =   '879879ASDAS212';
    var project_id    =   {{$project_id}};
    @if(isset($projectfile))
    var project_file    =   '{{url($projectfile)}}';
    @else
    var project_file    =   '';
    @endif
    var project_file_name    =   '';
    var website_id = {{$website_id}};


</script>
<script src="{{url('backend/assets/builder/js/options.js')}}"></script>
<script src="{{url('backend/assets/builder/js/download.js')}}"></script>
<script src="{{url('backend/assets/builder/js/builder.min.js')}}"></script>

</body>
</html>