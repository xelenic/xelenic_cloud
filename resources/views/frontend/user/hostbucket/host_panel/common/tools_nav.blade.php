<ul class="nav nav-tabs nav-sm nav-light mb-25" role="tablist">
    <li class="nav-item mb-5">
        <a class="nav-link link-icon-left  {{ request()->segment(3) == "server_information" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.host_panel',$hosting_details->id)}}">
            <i class="zmdi zmdi-apps"></i>HostBucket Information
        </a>
    </li>

    <li class="nav-item mb-5">
        <a class="nav-link link-icon-left {{ request()->segment(3) == "mysql_databases" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.mysql_databases',$hosting_details->id)}}">
            <i class="fa fa-database">
            </i>MySQL Databases
        </a>
    </li>
    <li class="nav-item mb-5">
        <a class="nav-link link-icon-left {{ request()->segment(3) == "git_deployment" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.git_panel',$hosting_details->id)}}" role="tab">
            <i class="fa fa-git">
            </i>Git Deployment
        </a>
    </li>
    {{--<li class="nav-item mb-5">--}}
        {{--<a class="nav-link link-icon-left" href="{{route('frontend.user.hostbucket.file_manager',$hosting_details->id)}}" role="tab">--}}
            {{--<i class="fa fa-folder"></i>--}}
            {{--File Manager--}}
        {{--</a>--}}
    {{--</li>--}}
    <li class="nav-item mb-5">
        <a class="nav-link link-icon-left {{ request()->segment(3) == "ftp_connections" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.ftp_connections',$hosting_details->id)}}" role="tab">
            <i class="fa fa-folder"></i>
            FTP Connections
        </a>
    </li>
    <li class="nav-item mb-5">
        <a class="nav-link link-icon-left" href="#tabs-4" role="tab">
            <i class="fa fa-send"></i>Email
        </a>
    </li>
</ul>