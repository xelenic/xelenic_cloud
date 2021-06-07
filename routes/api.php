<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\User\HostBucketController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('get_package_details/{name}', [HostBucketController::class, 'getpackageDetails'])->name('hostbucket.package_list_api');
Route::get('cost_calulcate/{package_name}/{billling_type}/{value}/{day}', [HostBucketController::class, 'billing_calulation'])->name('hostbucket.get_package_details');