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

Route::get('/', 'DashboardController@index');
Route::get('/detail', 'DetailController@index');
Route::get('/viewowner', 'viewownerController@index');
Route::get('/viewuser', 'viewuserController@index');
Route::get('/viewshop', 'viewshopController@index');





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

Route::get('/test1', function () {
    return view('welcome');
});
