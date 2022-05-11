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


Route::prefix('user')->namespace('App\Http\Controllers')->name('user/')->group(static function() {
    Route::prefix('test-tasks')->name('test-tasks/')->group(static function() {
        Route::get('/',                                             'TaskController@index')->name('index');
        Route::post('/store',                                       'TaskController@storeTask')->name('store');
        Route::get('/{taskId}',                                     'TaskController@destroy')->name('destroy');
    });
});
