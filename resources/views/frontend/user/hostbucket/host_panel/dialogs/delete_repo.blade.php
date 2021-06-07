<!-- Modal -->
<div class="modal fade" id="delete_{{$data_repo->name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Repository</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('frontend.user.hostbucket.gitRepoDelete',$hosting_details->id)}}" method="post">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-md-4">
                            <div style="background-image: url('{{url('images/repo.png')}}');height: 100px;background-repeat: no-repeat;background-size: contain;background-position: center;margin-bottom: 20px;"></div>
                        </div>
                        <div class="col-md-8">
                            <h4 style="font-size: 19px;padding-top: 20px;">Are you sure delete this repo "delete_{{$data_repo->name}}" ?</h4>

                        </div>
                    </div>

                    <input type="hidden" class="form-control" value="{{$data_repo->name}}" name="delete_repo" required>
                    <input type="hidden" class="form-control" value="{{$data_repo->repository_root}}" name="repo_path" required>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete This Repo</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>