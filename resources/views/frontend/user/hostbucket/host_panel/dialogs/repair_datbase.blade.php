<!-- Modal -->
<div class="modal fade" id="repair_database" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Repair Database</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('frontend.user.hostbucket.repair_users_database',$hosting_details->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Repair Database</label>
                        <select class="form-control" name="database_name">
                            @foreach($get_mysql_database->data as $getmySqlDBe)
                                <option value="{{$getmySqlDBe->database}}">{{$getmySqlDBe->database}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Repair Selected Databse</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>