<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link {{request()->segment(5) == "mysql_info" ? "active" : "" }}" aria-current="page" href="{{route('frontend.user.hostbucket.mysql_databases',$hosting_details->id)}}">
            Database
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{request()->segment(5) == "database_user_management" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.mysql_databases_users',$hosting_details->id)}}">
            Users
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{request()->segment(5) == "remote_sql" ? "active" : "" }}" href="{{route('frontend.user.hostbucket.remote_sql',$hosting_details->id)}}">
            Remote SQL
        </a>
    </li>
</ul>
<br>


