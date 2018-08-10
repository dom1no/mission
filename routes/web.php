<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::prefix('application')->name('application.')->group(function () {
        Route::get('/', 'ApplicationController@index')->name('index');
        Route::get('{application}', 'ApplicationController@show')->name('show');

        Route::get('paid/{application}', 'ApplicationController@paid')->name('paid');
    });

    Route::resource('specialization', 'SpecializationController')->except('show');
    Route::resource('degree', 'DegreeController')->except('show');
});
