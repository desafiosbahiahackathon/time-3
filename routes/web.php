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

Route::post('women/download','WomanController@download');
Route::post('women/modifyRange', 'WomanController@modifyRange');

Route::get('/', function () {
    return view('welcome');
});

Route::get('visit/dailyVisits','VisitController@dailyVisits');

Route::resource('user','UserController');
Route::resource('woman','WomanController');
Route::resource('aggressor','AggressorController');
Route::resource('visit','VisitController');
