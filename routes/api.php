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



    Route::get('/admin/get/blogs',[\App\Http\Controllers\Api\CategoryController::class,'index']);
    Route::get('/admin/get/blogs/edit/{id}',[\App\Http\Controllers\Api\CategoryController::class,'edit']);
    Route::post('/admin/post/blog',[\App\Http\Controllers\Api\CategoryController::class,'store']);
    Route::post('/admin/post/blogs/update/{id}',[\App\Http\Controllers\Api\CategoryController::class,'update']);


