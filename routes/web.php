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
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/photos', 'PhotoController@getPhotos');
    Route::post('/photos', 'PhotoController@uploadPhotos');
    Route::delete('/photos', 'PhotoController@deletePhoto');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('{all?}', 'AppController@index')->where('all', '([A-z\d-\/_.]+)?');
});
