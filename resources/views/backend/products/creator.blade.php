@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browser</div>
                        </div>
                        <div class="form-control file-amount">Browser</div>
                        <input type="hidden" name="thumbnail_img" class="selected-files">
                    </div>
                    <div class="file-preview box sm">
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>
    </div>




@endsection




