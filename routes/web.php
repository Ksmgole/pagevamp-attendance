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

<<<<<<< HEAD
Route::get('/', 'UserController@loginPage');
Route::get('/admin', 'UserController@adminDashboard')->name('admin.dashboard');
Route::get('/member', 'UserController@memberDashboard');
Route::post('/login','UserController@checkLogin')->name('login.post');
=======
Route::get('/login', 'UserController@loginPage')->name('login.get');
Route::get('/admin', 'UserController@admin_dashboard');
Route::get('/member', 'UserController@member_dashboard');
Route::post('','UserController@checklogin');

Route::post('login','UserController@postLogin')->name('login.post');
>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add
