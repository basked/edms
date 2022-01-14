<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/test',  function(){
    dd(123);
});
Route::apiResource('/courses',  \App\Http\Controllers\Api\CoursesController::class);

Route::resource('/types',  \App\Http\Controllers\Api\TypeController::class);
Route::resource('/bases', \App\Http\Controllers\Api\BasController::class);
Route::resource('/tests', \App\Http\Controllers\Api\TestController::class);
Route::get('/bas/solid/{s}',  [\App\Http\Controllers\Api\BasController::class,'getSolid']);
Route::resource('/bas', \App\Http\Controllers\Api\BasController::class);



