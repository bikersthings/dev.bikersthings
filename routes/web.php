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


// Route Visitor start

Route::group(['prefix' => '/'], function(){
    Route::get('/', function () {
        return view('page-visitor.home.main');
    });

    Route::get('/item-filter', function () {
        return view('page-visitor.item-filter.main');
    }); 
    
    Route::get('/item-detail', function () {
        return view('page-visitor.item-detail.main');
    });  
    
    Route::get('/toko-detail', function () {
        return view('page-visitor.toko-detail.main');
    }); 

    Route::get('/ice-box', function () {
        return view('page-visitor.ice-box.main');
    }); 
});

// Route Visitor end









// Route Panel User start

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

    Route::get('/wishlist', function () {
        return view('page-user.wishlist.index');
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

// Route Panel end









// Route Panel Admin start

Route::group(['prefix' => '/admin'], function(){

    Route::get('/', function () {
        return view('page-admin.item.index');
    }); 
    
    Route::get('/item', function () {
        return view('page-admin.item.index');
    });  

    Route::get('/icebox', function () {
        return view('page-admin.icebox.index');
    });  

    Route::get('/user', function () {
        return view('page-admin.user.index');
    });  

});

// Route Panel Admin end
