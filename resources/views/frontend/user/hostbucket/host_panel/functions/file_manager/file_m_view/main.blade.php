<div class="row">
    <div class="col-xl-12 pa-0">
        <div class="fmapp-wrap">
            <div class="fmapp-sidebar" style="height: 675px;">
                @include('frontend.user.hostbucket.host_panel.functions.file_manager.file_m_view.sidebar')
            </div>
            <div class="fm-box">
                <div class="fmapp-main fmapp-view-switch">
                    @include('frontend.user.hostbucket.host_panel.functions.file_manager.file_m_view.headerbar')
                    <div class="fm-body" style="height: 603px;">
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="nicescroll-bar" tabindex="-50" style="overflow: hidden; width: auto; height: 100%; outline: none;">
                                <div class="fmapp-view-wrap">
                                    <div class="fmapp-grid-view">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center mb-30">
                                                <img class="file-preview" src="dist/img/1foldericon.png" alt="fm-img">
                                                <span class="file-name mt-10">dashgrin_v1.0</span>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center mb-30">
                                                <img class="file-preview" src="dist/img/2image.png" alt="fm-img">
                                                <span class="file-name mt-10">Doodle_Themeforest.jpg</span>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center mb-30">
                                                <img class="file-preview" src="dist/img/3videoicon.png" alt="fm-img">
                                                <span class="file-name mt-10">Video.mp4</span>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center mb-30">
                                                <img class="file-preview" src="dist/img/4image.png" alt="fm-img">
                                                <span class="file-name mt-10">5_dark_support.jpg</span>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center mb-30">
                                                <img class="file-preview" src="dist/img/5psdicon.png" alt="fm-img">
                                                <span class="file-name mt-10">Chart2_recovered.psd</span>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-4 col-6 text-center mb-30">
                                                <img class="file-preview" src="dist/img/6image.png" alt="fm-img">
                                                <span class="file-name mt-10">Hound-Thumb2-1.png</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fmapp-table-view">
                                        <div id="fmapp_table_view_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="fmapp_table_view" class="table table-hover w-100 dataTable no-footer dtr-inline" role="grid" style="width: 1160px;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="fmapp_table_view" rowspan="1" colspan="1" style="width: 355px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="fmapp_table_view" rowspan="1" colspan="1" style="width: 198px;" aria-label="Modified: activate to sort column ascending">Modified</th>
                                                                <th class="sorting" tabindex="0" aria-controls="fmapp_table_view" rowspan="1" colspan="1" style="width: 127px;" aria-label="size: activate to sort column ascending">size</th>
                                                                <th class="sorting" tabindex="0" aria-controls="fmapp_table_view" rowspan="1" colspan="1" style="width: 119px;" aria-label="type: activate to sort column ascending">type</th>
                                                                <th class="sorting" tabindex="0" aria-controls="fmapp_table_view" rowspan="1" colspan="1" style="width: 161px;" aria-label=": activate to sort column ascending"></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody id="files_details">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5"></div>
                                                <div class="col-sm-12 col-md-7"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slimScrollBar" tabindex="-50" style="background: rgb(214, 217, 218); width: 6px; position: absolute; top: 0px; opacity: 0.8; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 603px; outline: none;"></div>
                            <div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete File and Folder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure delete this file?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>




<script>
    @push('after-script')

    $( document ).ready(function() {
        file_manager('public_html');
    });
    function show_delete_dialog() {
        $('#delete_file').modal('show')
    }
    function delete_item() {

    }




    function file_manager(file_path) {
        $('#files_details').html('');
        $.get("{{url('/')}}/hostbucket/file_manager/1/file_path="+ file_path , function(data, status){
            console.log('aaa');
            var my_object = JSON.parse(data);
            console.log(res);
            for (var myobj of my_object)
            {
                var res = myobj.fullpath.split('/').join('%2f');
                if(myobj.type == 'dir')
                {
                    $('#files_details').append('' +
                        '<tr role="row" class="odd" xmlns="http://www.w3.org/1999/html">' +
                            '<td tabindex="0" class="sorting_1">' +
                                '<span class="d-flex align-items-center" onclick="file_manager(\'' + res + '\')">' +
                                    '<i style="font-size: 32px;color: gray;padding-right: 15px;" class="fa fa-folder"></i> ' +
                                    '<span class="file-name">'+myobj.file +'</span>' +
                                '</span>' +
                            '</td>' +
                            '<td>' +
                                '<span class="mr-10">20/11/2015</span>'+
                                '<span class="file-time-modified inline-block">10:11</span>' +
                            '</td>' +
                                '<td>'+ myobj.humansize +'</td>' +
                                '<td>JPG File</td>' +
                            '<td>' +
                                '<span class="files-more-link">' +
                                    '<a href="javascript:void(0)"><i class="zmdi zmdi-link"></i></a>' +
                                    '<a href="javascript:void(0)" onclick="show_delete_dialog()"><i class="fa fa-trash"></i></a>' +
                                    '<a href="javascript:void(0)" onclick="show_delete_dialog()"><i class="zmdi zmdi-more"></i></a>' +
                                '</span>'+
                            '</td>'+
                        '</tr>');
                }else{
                    $('#files_details').append('' +
                        '<tr role="row" class="odd">' +
                        '<td tabindex="0" class="sorting_1">' +
                        '<span class="d-flex align-items-center">' +
                        '<i style="font-size: 32px;color: #3c5bb5;padding-right: 15px;" class="fa fa-file"></i> ' +
                        '<span class="file-name">'+myobj.file +'</span>' +
                        '</span>' +
                        '</td>' +
                        '<td>' +
                        '<span class="mr-10">20/11/2015</span>'+
                        '<span class="file-time-modified inline-block">10:11</span>' +
                        '</td>' +

                        '<td>'+ myobj.humansize +'</td>' +
                        '<td>JPG File</td>' +
                        '<td>' +
                        '<span class="files-more-link">' +
                        '<a href="javascript:void(0)"><i class="zmdi zmdi-link"></i></a>' +
                        '<a href="javascript:void(0)"><i class="zmdi zmdi-download"></i></a>' +
                        '<a href="javascript:void(0)"><i class="zmdi zmdi-more"></i></a>'+
                        '</span>'+
                        '</td>'+
                        '</tr>');
                }
                console.log(myobj.size)
            }
        });
    }

    @endpush

</script>