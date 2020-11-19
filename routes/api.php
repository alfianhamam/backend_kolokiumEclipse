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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student','StudentController@getAll');
Route::get('/student/{nim}','StudentController@showMahasiswa');
Route::post('/student','StudentController@storeMahasiswa');
Route::put('/student/{nim}','StudentController@updateMahasiswa');
Route::delete('/student/{nim}','StudentController@deleteMahasiswa');

Route::post('/schedule','ScheduleController@storeSchedule');
