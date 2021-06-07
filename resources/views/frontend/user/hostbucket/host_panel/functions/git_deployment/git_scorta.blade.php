@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">
        <div class="container-fluid px-xxl-65 px-xl-20">
            @include('frontend.breadcums.breadcums',[
          'breadcrumb' => [
                  [
                      'name' =>'Host Bucket',
                      'url' => route('frontend.user.hostbucket'),
                      'is_active' => null
                  ],
           ]
          ])
        </div>
        <div class="container-fluid mt-xl-50 mt-sm-30 mt-15 px-xxl-65 px-xl-20">
            @include('frontend.user.hostbucket.host_panel.common.tools_nav')
            <h4>Git Panel</h4> <br>
        @include('frontend.user.hostbucket.host_panel.common.git_nav')

        <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Scorta Deployment</h5>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Maecenas porttitor dictum felis ac auctor.
                                                Phasellus sagittis tincidunt dui.

                                                Aliquam in ex dolor. Ut accumsan
                                                ante est, ut dapibus erat aliquet non.
                                                Aliquam egestas erat metus, eu aliquam
                                                lectus porta sed. Etiam a auctor nunc, ultricies varius
                                                lectus. Curabitur et neque quis sem congue euismod at vel
                                                arcu. Aliquam volutpat ipsum velit, eu facilisis lectus
                                                aliquet a. Praesent neque nunc, pretium et faucibus eget,
                                                rhoncus a dolor. Integer vitae augue ac mi mattis suscipit
                                                . Nam sollicitudin metus arcu, ut pellentesque leo interdum
                                                eu. Ut sed risus felis. Vestibulum a aliquet ipsum,
                                                in condimentum tellus. Fusce congue vestibulum
                                                elit vitae feugiat. Nulla egestas tristique erat,
                                            </p><br>
                                            <h5>Scorta Deployment</h5>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Maecenas porttitor dictum felis ac auctor.
                                                Phasellus sagittis tincidunt dui.

                                                Aliquam in ex dolor. Ut accumsan
                                                ante est, ut dapibus erat aliquet non.
                                                Aliquam egestas erat metus, eu aliquam
                                                lectus porta sed. Etiam a auctor nunc, ultricies varius
                                                lectus. Curabitur et neque quis sem congue euismod at vel
                                                arcu. Aliquam volutpat ipsum velit, eu facilisis lectus
                                                aliquet a. Praesent neque nunc, pretium et faucibus eget,
                                                rhoncus a dolor. Integer vitae augue ac mi mattis suscipit
                                                . Nam sollicitudin metus arcu, ut pellentesque leo interdum
                                                eu. Ut sed risus felis. Vestibulum a aliquet ipsum,
                                                in condimentum tellus. Fusce congue vestibulum
                                                elit vitae feugiat. Nulla egestas tristique erat,
                                            </p>
                                        </div>

                                        <div class="col-md-6">
                                                <form action="{{route('frontend.user.hostbucket.scorta_installer',$hosting_details->id)}}" method="post">
                                                    {{csrf_field()}}
                                                <label>Scorta JSON</label>
                                                <textarea name="scorta_json" class="form-control" rows="20" required></textarea> <br>
                                                <button type="submit" class="btn btn-primary">Install</button>
                                                </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
