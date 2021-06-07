@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hk-pg-wrapper" style="min-height: 732px;">
        <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    @include('frontend.user.hostbucket.host_panel.functions.file_manager.file_m_view.main')

                </div>
            </div>
        </div>
    </div>




@endsection
