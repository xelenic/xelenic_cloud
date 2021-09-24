<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\FileManagerController;
use App\Http\Controllers\Frontend\User\XelenicCloudAppController;
use App\Http\Controllers\Frontend\User\WebsiteController;
use App\Http\Controllers\Frontend\AizUploadController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files',  [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids',  [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}',  [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);


/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {

        Route::get('projects', [WebsiteController::class, 'index'])->name('website_project');
        Route::get('projects/builder-qulint/{id}', [WebsiteController::class, 'builder'])->name('website_project.builder');
        Route::get('projects/builder-qulint/edit/{id}', [WebsiteController::class, 'builder_edit'])->name('website_project.builder_edit');
        Route::post('projects/create', [WebsiteController::class, 'create'])->name('website_project.create');
        Route::get('projects/website=dashboard/{id}', [WebsiteController::class, 'dashboard'])->name('website_project.dashboard');
        Route::get('larabulder', [DashboardController::class, 'larabulder'])->name('larabulder');
        Route::match(['get', 'post'],'api/ajax',[WebsiteController::class,'ajax'])->name('ajax_point');




        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
