@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">

        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.breadcums.breadcums',[
           'breadcrumb' => [
                   [
                       'name' =>'Website Projects',
                       'url' => route('frontend.user.website_project'),
                       'is_active' => 'yes'
                   ]
            ]
           ])

            <div class="row" style="margin-top: 20px;">

                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <div class="" style="border-style: dashed;border-color: grey;padding: 90px;text-align: center;border-width: 2px;">
                            Create Website
                        </div>
                    </a>
                </div>

                @foreach($website_details as $websites)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <div class="card card-sm">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div style="background-image: url('{{url('images/web.png')}}');height: 130px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5>{{$websites->name}}</h5><br>

                                        <div class="" style="border-style: solid;border-width: 1px;padding: 10px;text-align: center;border-color: #e8e8e8;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <b>Views Count</b><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4" style="color: green;">
                                                    <i class="fa fa-eye"></i> 00
                                                </div>
                                                <div class="col-md-4">
                                                    <i class="fa fa-line-chart"></i> 00
                                                </div>
                                                <div class="col-md-4" style="color: red;">>
                                                    <i class="fa fa-arrow-down"></i> 00
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-muted">
                                <div class="btn-group" style="margin-left: 20px;">
                                    <div class="">
                                        <a href="{{route('frontend.user.website_project.dashboard',$websites->id)}}" class="btn btn-secondary  btn-sm">Dashboard</a>
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-secondary  btn-sm dropdown-toggle" type="button">
                                            <i class="fa fa-cogs"></i><span class="caret"></span>
                                        </button>
                                        <div role="menu" class="dropdown-menu" style="will-change: transform;">
                                            <a class="dropdown-item" href="#">Download Source File</a>
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Download File</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">FTP Settings</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                        </div>

                                        @if($websites->project_file)
                                            <a href="{{route('frontend.user.website_project.builder_edit',$websites->id)}}" class="btn btn-primary  btn-sm">Edit with Builder</a>
                                        @else
                                            <a href="{{route('frontend.user.website_project.builder',$websites->id)}}" class="btn btn-primary  btn-sm">Edit with Builder</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Website</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('frontend.user.website_project.create')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" name="project_name" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="8" class="form-control" name="description" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
