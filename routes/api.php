<?php

use Illuminate\Http\Request;

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

Route::get('specializations', 'CatalogController@specializations')->name('specializations');
Route::get('degree', 'CatalogController@degree')->name('degree');

Route::prefix('application')->name('application.')->group(function () {
    Route::get('/', 'ApplicationController@index')->name('index');

    Route::post('store', 'ApplicationController@store')->name('store');
});
