<?php

use App\Http\Controllers\Frontend\User\XelenicCloudAppController;

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */

Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        //Xelenic Cloud App
        Route::get('hostbucket/cloud_panel', [XelenicCloudAppController::class, 'index'])->name('hostbucket.cloud_panel');
    });
});
