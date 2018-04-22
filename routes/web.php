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


Route::get('/', 'UserController@login')->name('login');
Route::post('login', 'UserController@postLogin')->name('postLogin');
Route::get('logout', 'UserController@logout')->name('logout');


Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'UserController@adminDashboard')->name('adminDashboard');
    Route::get('member', 'UserController@memberDashboard')->name('memberDashboard');
});

Route::get('/member/create', 'UserController@createMember')->name('create.member');
Route::post('/member', 'UserController@saveMember')->name('save.member');


Route::get('/memberlist', 'UserController@showMember')->name('show.member');
Route::get('/member/{id}/edit', 'UserController@editMember')->name('edit.member');
Route::post('/member/{id}', 'UserController@updateMember')->name('update.member');




