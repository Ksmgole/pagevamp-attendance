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
    return 'Welcome to My Attendance Portal. You mere mortals.';
});


Auth::routes();

Route::get('/login', 'UserController@loginPage')->name('login.get');
Route::get('/admin', 'UserController@admin_dashboard');
Route::get('/member', 'UserController@member_dashboard');
Route::post('','UserController@checklogin');

Route::post('login','UserController@postLogin')->name('login.post');
