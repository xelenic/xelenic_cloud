<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar" style="background-color: #4d90fe;">
    <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href="javascript:void(0);"><span class="feather-icon"><i data-feather="more-vertical"></i></span></a>
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="">
        Xelenic
    </a>
    <ul class="navbar-nav hk-navbar-content order-xl-2">
        <li class="nav-item">
            <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
        </li>
        <li class="nav-item">
            <a href="" style="color: white;background-color: #015df5;padding: 10px;border-radius: 11px;">
                <i class="fa fa-money"></i>
                Xe {{auth()->user()->credits_value}}
            </a>
        </li>
        <li class="nav-item dropdown dropdown-notifications">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(count($notifications) == 0)
                    <span class="feather-icon"><i data-feather="bell"></i></span>
                @else
                    <span class="feather-icon bell"><i data-feather="bell"></i></span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                @if(count($notifications) == 0)
                    <div class="notifications-nicescroll-bar">
                        <h2 style="color: gray;text-align: center;font-size: 20px;padding-top: 30px;">No Notifications</h2>
                    </div>
                @else
                    <div class="notifications-nicescroll-bar">
                        @foreach($notifications as $notifications)
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span>
                                                            <i class="{{$notifications->notification_icon}}"></i>
                                                        </span>
                                                    </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">{{$notifications->description}}</div>
                                            <div class="notifications-time">{{\Carbon\Carbon::parse($notifications->created_at)->diffForhumans()}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                @endif

            </div>
        </li>
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{url('FrontDashboard/dist/img/avatar1.jpg')}}" alt="user" class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>{{auth()->user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href=""><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                <div class="dropdown-divider"></div>
                <div class="sub-dropdown-menu show-on-hover">
                    <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                    <div class="dropdown-menu open-left-side">
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href=""><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
            </div>
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-0">
            <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link active">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Learning Center</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Documentation</a>
                    <a class="dropdown-item" href="#">Tutorial</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Write your Tutorial</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Hire</a>
            </li>
            <li class="nav-item">
                <a href="calendar.html" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="file-manager.html" class="nav-link">File Manager</a>
            </li>
        </ul>
    </div>
</nav>