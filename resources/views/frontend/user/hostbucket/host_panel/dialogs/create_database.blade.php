<!-- Modal -->
<div class="modal fade" id="create_database" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Database</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('frontend.user.hostbucket.create_database',$hosting_details->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Database Name</label>
                        <input type="text" class="form-control" name="database_name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Database</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>