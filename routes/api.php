<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\AdvertisementController;
use App\Http\Controllers\api\ServiceController;
use App\Http\Controllers\api\SubserviceController;
use App\Http\Controllers\api\SubsubserviceController;
use App\Http\Controllers\api\DepartmentController;
use App\Http\Controllers\api\Department_detailController;
use App\Http\Controllers\api\CityController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::put('/categories/{id}', 'CategoryController@update');

Route::apiResource('/category', CategoryController::class);
Route::apiResource('/advertisement', AdvertisementController::class);
Route::apiResource('/service', ServiceController::class);
Route::apiResource('/subservice', SubserviceController::class);
Route::apiResource('/subsubservice', SubsubserviceController::class);
Route::apiResource('/department', DepartmentController::class);
Route::apiResource('/department_detail', Department_detailController::class);
Route::apiResource('/city', CityController::class);

//recive category id from mobile  and get service
Route::get('/getService/{id}', [ServiceController::class, 'index']);


//recive category id from mobile  and get service
Route::get('/advertisementCate', [AdvertisementController::class ,'advertisementCate']);









Route::get('/advertisementService/{id}/{id}', [AdvertisementController::class ,'advertisementService']);



