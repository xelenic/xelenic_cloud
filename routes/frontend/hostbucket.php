<?php
use App\Http\Controllers\Frontend\User\HostBucketController;



Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {

        /**
         * HostbucketRoutes
         * Copyright (c) Xelenic PVT Ltd
         * Author - Sanjaya Senevirathne
         */

        /**
         * Hostbucket Function
         * Create Host
         */

        Route::get('hostbucket', [HostBucketController::class, 'index'])->name('hostbucket');
        Route::get('hostbucket/create', [HostBucketController::class, 'create'])->name('hostbucket.create');
        Route::get('hostbucket/dashboard/{id}', [HostBucketController::class, 'view'])->name('hostbucket.view');
        Route::get('hostbucket/create_wrong/{data}', [HostBucketController::class, 'create_wrong'])->name('hostbucket.create_wrong');
        Route::post('hostbucket/create_hostbucket', [HostBucketController::class, 'create_hostbucket'])->name('hostbucket.create_hostbucket');


    });
});
