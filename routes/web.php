<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Visitor\HomeController;

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
    Route::get('/', [HomeController::class,'index']);

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


