<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.home.index');
});

Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/user_role', 'App\\Http\\Controllers\\Admin\user_roleController');
Route::resource('admin/reservation_status', 'App\\Http\\Controllers\\Admin\reservation_statusController');
Route::resource('admin/missing_item_status', 'App\\Http\\Controllers\\Admin\missing_item_statusController');
Route::resource('admin/attendance', 'App\\Http\\Controllers\\Admin\attendanceController');
Route::resource('admin/reservation', 'App\\Http\\Controllers\\Admin\reservationController');
Route::resource('admin/schedule', 'App\\Http\\Controllers\\Admin\scheduleController');