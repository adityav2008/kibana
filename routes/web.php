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

Route::get('/', function () {
    return view('content.welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
  Route::get('/security-dashboard-endpoints', function () {
      return view('content.index');
  });
  Route::get('/test', 'SCCM\GetELKDataController@index');
});
