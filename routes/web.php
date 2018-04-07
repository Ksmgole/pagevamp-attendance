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

//Route::get('/', function () {
//    return view ('welcome');
//});


Auth::routes();

Route::get('/', 'UserController@loginPage');
Route::get('/admin', 'UserController@adminDashboard')->name('admin.dashboard');
Route::get('/member', 'UserController@memberDashboard');
Route::post('/login','UserController@checkLogin')->name('login.post');
