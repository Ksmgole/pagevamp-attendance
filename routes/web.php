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


//Auth::routes();
Route::group(['middleware'=>'auth'],function()
{
    Route::get('/', 'UserController@loginPage');
    Route::get('/admin', 'UserController@adminDashboard')->name('admin.dashboard');
    Route::get('/member', 'UserController@memberDashboard');
    Route::post('/login', 'UserController@checkLogin')->name('login.post');
});

    Route::get('/createmember','UserController@createMember')->name('create.member');
    Route::post('','UserController@insertMember')->name('insert.member');


