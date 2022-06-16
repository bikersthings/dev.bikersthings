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
    return view('layout-visitor.main');
});

Route::group(['prefix' => '/user'], function(){
    
    Route::get('/', function () {
        return view('page-user.item.index');
    });

    Route::group(['prefix' => '/item'], function(){
        Route::get('/', function () {
            return view('page-user.item.index');
        });
        
        Route::get('/create', function () {
            return view('page-user.item.create');
        });    
    });

    Route::get('/icebox', function () {
        return view('page-user.icebox.index');
    });

    Route::get('/keranjang', function () {
        return view('page-user.keranjang.index');
    });

    Route::get('/keuangan', function () {
        return view('page-user.keuangan.index');
    });

    Route::get('/setting', function () {
        return view('page-user.setting.index');
    });

});
