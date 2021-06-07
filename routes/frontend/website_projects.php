<?php
use App\Http\Controllers\Frontend\User\WebsiteController;
use App\Http\Controllers\Backend\DashboardController;



Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /**
         * Website Builder
         * Copyright (c) Xelenic PVT Ltd
         * Author - Sanjaya Senevirathne
         */

        /**
         * Website Builder Function
         * Create Host
         */

        //Website Project

    });
});

