<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AuthController;
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

//public route
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::group(["prefix" => "todo"],function(){
        Route::get('/get/{id}', [TodoController::class,'get']);
        Route::get('/gets', [TodoController::class,'gets']);
        Route::post('/store', [TodoController::class,'store']);
        Route::post('/update/{id}', [TodoController::class,'update']);
        Route::post('/update-status/{id}', [TodoController::class,'updateStatus']);
        Route::post('/destroy/{id}', [TodoController::class,'destroy']);
        Route::post('/search/{data}', [TodoController::class,'search']);

    });
});





