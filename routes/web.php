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


Route::get('/', 'UserController@loginPage');
Route::post('/login', 'UserController@checkLogin')->name('login.post');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'UserController@adminDashboard')->name('admin.dashboard');
    Route::get('/member', 'UserController@memberDashboard');
});

Route::get('/member/create', 'UserController@createMember')->name('create.member');
Route::post('/member', 'UserController@saveMember')->name('save.member');


Route::get('/memberlist', 'UserController@showMember')->name('show.member');
Route::get('/member/{id}/edit', 'UserController@editMember')->name('edit.member');
Route::post('/member/{id}', 'UserController@updateMember')->name('update.member');




