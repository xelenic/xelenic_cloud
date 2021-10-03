<nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color: #4d90fe !important;">
    <a class="navbar-brand" href="/">Xelenic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 920px;font-size: 12px;background: #2b69bd;color: white;border-color: #2c59ff;border-top-width: 0px;border-bottom-width: 3px;border-right-width: 3px;border-left-width: 3px;">

                    <div class="row" style="padding: 14px;">
                        <div class="col-md-3" style="font-size: 12px;text-align: center;width: 370px;color:white;">
                            <div style="background-image: url('FrontPage/img/rocket.jpg');height: 190px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                            Lorposi ipsume data mapake Lorposi ipsume data mapakeLorposi ipsume data mapake Lorposi ipsume data mapake
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border-color: #2196f3;">
                                <div class="card-body" style="background-color: #4174c7;color: white;border-color: #2b69bd;">
                                    <b style="color: white;font-weight: 600;text-align: center">Tools and Servers </b><i class="fa fa-server" style="font-size: 15px;padding-left: 10px;"></i> <br> <br>

                                    @foreach(\App\Models\Products::where('category','tools')->get() as $productlist)
                                        <a style="color: white;" class="dropdown-item" href="{{route('frontend.products.show',$productlist->slug)}}">{{$productlist->product_name}}</a>
                                        <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border-color: #2196f3;">
                                <div class="card-body" style="background-color: #4174c7;color: white;border-color: #2b69bd;">
                                    <b  style="color: white;font-weight: 600;text-align: center">Cloud Products</b><i class="fa fa-cloud" style="font-size: 15px;padding-left: 10px;"></i> <br> <br>
                                    @foreach(\App\Models\Products::where('category','cloud-products')->get() as $productlist_cloud)
                                        <a  style="color: white;" class="dropdown-item" href="{{route('frontend.products.show',$productlist_cloud->slug)}}">{{$productlist_cloud->product_name}}</a>
                                        <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border-color: #2196f3;">
                                <div class="card-body" style="background-color: #4174c7;color: white;border-color: #2b69bd;">

                                    <b  style="color: white;font-weight: 600;text-align: center">Business APIs</b><i class="fa fa-cube" style="font-size: 15px;padding-left: 10px;"></i> <br> <br>
                                    @foreach(\App\Models\Products::where('category','business-apis')->get() as $product_business_api)
                                        <a  style="color: white;" class="dropdown-item" href="{{route('frontend.products.show',$product_business_api->slug)}}">{{$product_business_api->product_name}}</a>
                                        <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 920px;font-size: 12px;background: #2b69bd;color: white;border-color: #2c59ff;border-top-width: 0px;border-bottom-width: 3px;border-right-width: 3px;border-left-width: 3px;">
                    <div class="row" style="padding: 14px;">
                        <div class="col-md-3" style="font-size: 12px;text-align: center;width: 370px;color:white;">
                            <div style="background-image: url('FrontPage/img/rocket.jpg');height: 190px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                            Lorposi ipsume data mapake Lorposi ipsume data mapakeLorposi ipsume data mapake Lorposi ipsume data mapake
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border-color: #2196f3;">
                                <div class="card-body" style="background-color: #4174c7;color: white;border-color: #2b69bd;">
                                    <b style="color: white;font-weight: 600;text-align: center">Tools and Servers </b><i class="fa fa-cube" style="font-size: 15px;padding-left: 10px;"></i> <br> <br>
                                    <a style="color: white;" class="dropdown-item" href="/about">Animtrap</a>
                                    <div class="dropdown-divider"></div>
                                    <a style="color: white;" class="dropdown-item" href="/about/team">Xelenic Builder</a>
                                    <div class="dropdown-divider"></div>
                                    <a style="color: white;" class="dropdown-item" href="#">ImgAI</a>
                                    <div class="dropdown-divider"></div>
                                    <a style="color: white;" class="dropdown-item" href="#">CloudForm</a>
                                    <div class="dropdown-divider"></div>
                                    <a style="color: white;" class="dropdown-item" href="#">ProtVideos</a>
                                    <div style="color: white;" class="dropdown-divider">ProdMov</div>
                                    <a style="color: white;" class="dropdown-item" href="#">Pentoa Server</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border-color: #2196f3;">
                                <div class="card-body" style="background-color: #4174c7;color: white;border-color: #2b69bd;">
                                    <b  style="color: white;font-weight: 600;text-align: center">Cloud Products</b><i class="fa fa-cube" style="font-size: 15px;padding-left: 10px;"></i> <br> <br>
                                    <a  style="color: white;" class="dropdown-item" href="/about">HostBucket</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="/about/team">HostBucket Deployer</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">OpenFrogs</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">Intractor</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">CMonitor</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">Steam Server</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border-color: #2196f3;">
                                <div class="card-body" style="background-color: #4174c7;color: white;border-color: #2b69bd;">
                                    <b  style="color: white;font-weight: 600;text-align: center">Cloud Products</b><i class="fa fa-cube" style="font-size: 15px;padding-left: 10px;"></i> <br> <br>
                                    <a  style="color: white;" class="dropdown-item" href="/about">HostBucket</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="/about/team">HostBucket Deployer</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">OpenFrogs</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">Intractor</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">CMonitor</a>
                                    <div class="dropdown-divider"></div>
                                    <a  style="color: white;" class="dropdown-item" href="#">Steam Server</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/partnerships">Partners</a>
            </li>

            <li class="nav-item dropdown">
                <a data-hover="dropdown" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Company
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: max-content;">
                    <div class="row" style="padding: 14px;">
                        <div class="col-md-6" style="font-size: 12px;text-align: center;width: 370px;">
                            <div style="background-image: url('FrontPage/img/company_staff.png');height: 190px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                            Lorposi ipsume data mapake Lorposi ipsume data mapakeLorposi ipsume data mapake Lorposi ipsume data mapake
                        </div>
                        <div class="col-md-6">
                            <a class="dropdown-item" href="/about">About</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/blog">Blog</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Careers</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/events">Events</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Community</a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">Research</a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search" style="border-radius: 15px;background: #2c59ff;border-color: #4d90fe;color: white;">
            <button class="btn btn-primary" style="background-color:#2c59ff;color: white;border-color: #4d90fe;" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>

        @auth
            <a href="{{route('frontend.user.dashboard')}}" class="btn btn-primary" style="background: #007bff;border-radius: 7px;margin-left: 15px;color: white;padding-left: 20px;padding-right: 20px;">
                Console
            </a>
        @else
            <a href="{{route('frontend.auth.login')}}" class="btn btn-primary" style="background: #007bff;border-radius: 7px;margin-left: 15px;color: white;padding-left: 20px;padding-right: 20px;">
                Sign In
            </a>
            <a href="{{route('frontend.auth.register')}}" class="btn btn-primary"  style="background: #dc3545;border-radius: 7px;margin-left: 15px;color: white;padding-left: 20px;padding-right: 20px;">
                Create a Account
            </a>
        @endauth



    </div>
</nav>