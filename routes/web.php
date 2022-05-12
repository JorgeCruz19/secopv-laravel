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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/lotificacion', 'LotificationController@index')->name('admin.lotification.index');
    Route::get('/lotificacion/create', 'LotificationController@create')->name('admin.lotification.create');
    Route::post('/lotificacion', 'LotificationController@store')->name('admin.lotification.store');
    Route::get('/lotificacion/{lotification}', 'LotificationController@edit')->name('admin.lotification.edit');
    Route::patch('/lotificacion/{lotification}', 'LotificationController@update')->name('admin.lotification.update');
    Route::delete('lotificacion/{lotification}', 'LotificationController@destroy')->name('admin.lotification.destroy');
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
