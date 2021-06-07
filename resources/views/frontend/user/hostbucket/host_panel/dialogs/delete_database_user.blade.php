<!-- Modal -->
<div class="modal fade" id="delete_user_{{$mysql_user->user}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete DB User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('frontend.user.hostbucket.delete_user_database',$hosting_details->id)}}" method="post">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-md-4">
                            <div style="background-image: url('{{url('images/database.png')}}');height: 100px;background-repeat: no-repeat;background-size: contain;background-position: center;margin-bottom: 20px;"></div>
                        </div>
                        <div class="col-md-8">
                            <h4 style="font-size: 19px;padding-top: 20px;">Are you sure delete this "{{$mysql_user->user}}" User? </h4>

                        </div>
                    </div>

                    <input type="hidden" class="form-control" value="{{$mysql_user->user}}" name="database_user" required>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>