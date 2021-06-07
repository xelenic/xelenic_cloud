<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link {{ request()->segment(5)== "git_panel" ? "active" : "" }}" aria-current="page" href="{{route('frontend.user.hostbucket.git_panel',$hosting_details->id)}}">
            Git
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  " href="#">
            CI/CD
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link   {{ request()->segment(5)== "scorta_installer" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.scorta_installer',$hosting_details->id)}}">
            Scorta Installer
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  " href="#">
            Deployment
        </a>
    </li>
</ul>
<br>