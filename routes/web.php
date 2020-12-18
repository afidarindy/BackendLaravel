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
Route::group(['middleware' => []],function(){ 
    Route::group(['prefix'=>'user'], function(){
        Route::get('/viewAdmin', 'UserController@index')->name('user.viewAdmin');
        Route::get('/user.admin', 'UserController@admin')->name('user.admin');
		Route::resource('user', 'UserController');
    });
    
});

Route::resource('/loker', 'LokerController');
Route::resource('/pelamarKerja', 'PelamarKerjaController');
Route::resource('/akunusaha', 'AkunUsahaController');
Route::resource('/kategoriusaha', 'KategoriUsahaController');
