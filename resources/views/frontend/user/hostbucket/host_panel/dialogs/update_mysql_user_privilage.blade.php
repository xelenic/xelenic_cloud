

<!-- Modal -->
<div class="modal fade" id="update_mysql_user_previlage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User Access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('frontend.user.hostbucket.database_user_access',$hosting_details->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Select MySQL User</label>
                       <select class="form-control" name="username">
                           @foreach($get_mysql_users->data as $get_mysql_user)
                               <option value="{{$get_mysql_user->user}}">{{$get_mysql_user->user}}</option>
                           @endforeach
                       </select>
                    </div>
                    <div class="form-group">
                        <label>Database Name</label>
                        <input type="text" class="form-control" name="database_name" value="{{$database_name}}" readonly>
                    </div>

                    <h5 style="font-size: 16px;padding-bottom: 11px;">User Privileges</h5>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="ALTER" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">ALTER</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="ALTER_ROUTINE" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">ALTER ROUTINE</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="CREATE" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">CREATE</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="CREATE_ROUTINE" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">CREATE ROUTINE</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="CREATE_TEMP_TABLES" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">CREATE TEMP TABLES</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="CREATE VIEW" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">CREATE VIEW</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="DELETE" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">DELETE</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="DROP" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">DROP</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="EVENT" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">EVENT</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="EXECUTE"  class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">EXECUTE</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="INDEX" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">INDEX</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="INSERT" class="custom-control-input" id="customCheck12">
                                <label class="custom-control-label" for="customCheck12">INSERT</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="LOCK_TABLES" class="custom-control-input" id="customCheck13">
                                <label class="custom-control-label" for="customCheck13">LOCK TABLES</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="REFERENCES" class="custom-control-input" id="customCheck14">
                                <label class="custom-control-label" for="customCheck14">REFERENCES</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="SELECT" class="custom-control-input" id="customCheck15">
                                <label class="custom-control-label" for="customCheck15">SELECT</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="SHOW_VIEW" class="custom-control-input" id="customCheck16">
                                <label class="custom-control-label" for="customCheck16">SHOW VIEW</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="TRIGGER" class="custom-control-input" id="customCheck17">
                                <label class="custom-control-label" for="customCheck17">TRIGGER</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="UPDATE"  class="custom-control-input" id="customCheck18">
                                <label class="custom-control-label" for="customCheck18">UPDATE</label>
                            </div>
                        </div>

                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Make Access</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>