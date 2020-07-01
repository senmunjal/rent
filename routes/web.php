<?php

use App\Http\Controllers\OwnerDashboard;
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

Route::get('/', 'SuperAdmin\DashboardController@index');

Route::get('/admin','Admin\DashboardController@index');

Route::get('/test', function () {
    return view('layout');
});


Route::get('/test2', function () {
    return view('contact');
});
Route::get('/test3', function () {
    return view('profile');
});

Route::get('/test4', function () {
    return view('superadmin');
});

Route::get('/test5', function () {
    return view('calender');
});

Route::get('/test2', function () {
    return view('contact');
});
