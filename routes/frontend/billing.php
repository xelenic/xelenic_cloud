<?php
use App\Http\Controllers\Frontend\User\CreaditController;
use App\Http\Controllers\Frontend\User\CreditsPackageController;


Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        /**
         * Billing Routes
         * Copyright (c) Xelenic PVT Ltd
         * Author - Sanjaya Senevirathne
         */

        /**
         * Billing Function
         * Credit Total
         */

        //Credit Total
        Route::get('credit_total', [CreaditController::class, 'index'])->name('credit_total');
        Route::get('credit_total/view_billing_invoice/{id}', [CreaditController::class, 'show_invoice'])->name('credit_total.view_billing_invoice');

        //Credit Packages
        Route::get('packages',[CreditsPackageController::class,'index'])->name('credit_packages');
        Route::post('packages/purchase', [CreditsPackageController::class, 'purchase'])->name('credit_packages.purchase');


    });
});

