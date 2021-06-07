@if(Session::has('success'))
    <div class="alert alert-inv alert-inv-info alert-wth-icon alert-dismissible fade show" role="alert">
            <span class="alert-icon-wrap">
                <i class="zmdi zmdi-settings"></i>
            </span>
        {{Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-inv alert-inv-danger alert-wth-icon alert-dismissible fade show" role="alert">
        <span class="alert-icon-wrap"><i class="zmdi zmdi-bug"></i></span>
        {{Session::get('error')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif