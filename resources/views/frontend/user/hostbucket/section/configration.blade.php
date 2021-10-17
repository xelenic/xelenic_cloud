<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-4">

                <div class="card" style="height: 150px;">


                    <div style="background-image: url('{{url('images/apache.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header">
                        Apache Server
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/mysql.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        MySQL Maria DB
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/ubuntu.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        CentOS
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/cpanel.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        Cpanel
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/imufy.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        Imufy Protection
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/php.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        PHP Supported
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/git.jpg')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        Git Repo Connector
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/xelenic_server.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        Xelenic Cloud Management
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 150px;">

                    <div style="background-image: url('{{url('images/db_backup.png')}}');height: 170px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                    <div class="card-header" style="text-align: center">
                        DB Backup
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Control Panel</label>

                    <select class="form-control" name="control_panel_type">
                        <option value="cpanel" selected>Cpanel</option>
                        <option value="vistapanel" disabled>Vista Panel</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Xelenic Panel</label>
                    <select class="form-control" name="xelenic_panel">
                        <option value="enabled" selected>Enabled</option>
                        <option value="disabled" disabled>Disabled</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Username</label>
                    <input id="host_username" name="username" oninput="summery_update()" type="text" class="form-control">
                    <div class="errr_description" style="color: red;"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input id="host_email" name="support_email" oninput="summery_update()" type="text" class="form-control host_email" value="{{auth()->user()->email}}" readonly>
                    <div class="errr_description support_email" style="color: red;"></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Domain (Example : example.com)</label>
            <input id="host_domain" name="domain_name" oninput="summery_update()" type="text" class="form-control">
            <div class="errr_description" style="color: red;"></div>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" oninput="summery_update()" id="host_password" class="form-control" value="{{randomPassword()}}">
            <div class="errr_description pass" style="color: red;"></div>
        </div>

    </div>
</div>