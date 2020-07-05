<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('owner')->group(function(){

    Route::get('/','Admin\DashboardController@index')->name('owner.dashboard');


    //login

    Route::get('/login','Auth\OwnerLoginController@showLoginForm')->name('owner.login');
    Route::post('/login','Auth\OwnerLoginController@login')->name('owner.login.submit');
    
    //logout

    Route::post('/logout','Auth\OwnerLoginController@logout')->name('owner.logout');

    //register

    Route::get('/register','Auth\OwnerRegisterController@showRegistrationForm')->name('owner.register');
    Route::post('/register','Auth\OwnerRegisterController@register')->name('owner.register.submit');

});


Route::get('/', 'SuperAdmin\DashboardController@index');

Route::get('/users','SuperAdmin\DashboardController@viewUsers');

//Route::get('/owners','SuperAdmin\DashboardController@viewOwners');

//Route::get('/admin/{id}','Admin\DashboardController@index');

//Route::get('/admin/{id}/request','Admin\DashboardController@rentrequest');


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




