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
    return view('welcome');
});

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],function() {
    Route::get('/', function () {
        return view('hallo');
    });
    Route::get('/home', function () {
        return view('hallo');
    });
    
    Route::resource('user', 'UserController');
    Route::resource('motor', 'MotorController');
    Route::resource('pembeli', 'PembeliController');

});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


