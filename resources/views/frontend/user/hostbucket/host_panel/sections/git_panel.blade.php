<div class="row">
    <div class="col-md-12">
        <h4>Git Panel</h4> <br>

        @include('frontend.user.hostbucket.host_panel.common.flash_message')

        @include('frontend.user.hostbucket.host_panel.common.git_nav')

        <div class="row">
            <div class="col-md-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div style="background-image: url('{{url('images/gitpanel.png')}}');height: 300px;background-position: center;background-repeat: no-repeat;background-size: contain"></div>
                        <p>
                            Use this interface to create new repositories or
                            clone existing remote repositories. To add an
                            existing repository to the list of xelenic managed
                            repositories, select that repository path when you
                            create the repository. The system will automatically add
                            and configure the repository. In order to clone private repositories,
                            advanced users should preconfigure access.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th>Repository</th>
                                            <th>Repository Path</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($getretnGit->data as $data_repo)
                                                <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne_{{$data_repo->name}}">
                                                    <td class="expand-button">{{$data_repo->name}}</td>
                                                    <td>{{$data_repo->repository_root}}</td>
                                                    <td>
                                                        <a href="{{route('frontend.user.hostbucket.gitRepoManage',[$hosting_details->id,$data_repo->name])}}" class="btn btn-primary btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="" class="btn btn-danger btn-xs" data-target="#delete_{{$data_repo->name}}" data-toggle="modal">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td colspan="3">
                                                        <div id="collapseOne_{{$data_repo->name}}" class="collapse in">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>Current Running Branch: {{$data_repo->branch}}</p>
                                                                            <p>Deplorable Status: {{$data_repo->deployable}}</p>
                                                                            <p>Version Control Type: {{$data_repo->type}}</p>
                                                                            <p>Last Deployment: {{$data_repo->last_deployment}}</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p>Current Running Branch: {{$data_repo->source_repository->url}}</p>
                                                                            <p>Remote Name: {{$data_repo->source_repository->remote_name}}</p>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                @include('frontend.user.hostbucket.host_panel.dialogs.delete_repo')
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <form action="{{route('frontend.user.hostbucket.gitRepoCreate',$hosting_details->id)}}" method="post">
                            {{csrf_field()}}
                            <h5>Create Repository</h5>
                            <br>
                            <div class="form-check">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="clone_repo" checked disabled readonly>
                                    <label class="custom-control-label" for="customSwitch1">Clone a Repository</label>
                                </div>
                                <p>Enable this toggle if you want to clone a remote repository, or disable this toggle to create a new repository.</p>
                            </div><br>

                            <div class="form-group">
                                <label>Clone URL</label>
                                <input type="text" name="clone_url" class="form-control" required>
                                <p>Enter the clone URL for the remote repository. All clone URLs must begin with the http://, https://, ssh://, or git:// protocols or begin with a username and domain.
                                </p>
                            </div>

                            <div class="form-group">
                                <label>Repository Path</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">/home/ruwankavinga</span>
                                    </div>
                                    <input type="text" name="repo_path" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    <p>The path cannot contain the “./” and “../” directory references, whitespace, or the
                                        following characters: \ * | " ' < > & @ ` $ { } [ ] ( ) ; ? : = % #</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Repository Name</label>
                                <p>This name does not impact functionality, and instead functions only as a display name.</p>
                                <input name="repo_name" type="text" class="form-control" required>
                                <p>The repository name may not include the “<” and “>” characters.</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>