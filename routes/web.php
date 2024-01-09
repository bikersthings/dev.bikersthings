<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Visitor\HomeController;
use App\Http\Controllers\Visitor\ItemDetailController;

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
    
    Route::get('/item-detail', [ItemDetailController::class,'index']);
    // Route::get('/item-detail', function () {
    //     return view('page-visitor.item-detail.main');
    // });  
    
    Route::get('/toko-detail', function () {
        return view('page-visitor.toko-detail.main');
    }); 

    Route::get('/ice-box', function () {
        return view('page-visitor.ice-box.main');
    }); 

    Route::get('/login', function () {
        return view('auth.login');
    }); 

    Route::get('/register', function () {
        return view('auth.register');
    }); 
});

// Route Visitor end




// Belahar
    Route::get('/belahar', function() {
        $brand = Http::withHeaders([
            'Authorization' => 'Bearer pathCnVHzPHzkdZT0.1bc756d02ec7ed26a492f2fc5945d9711ef0825ddba9912cd6a62df6e0740351'
        ])->get('https://api.airtable.com/v0/appbk25M6lGwgaVjW/item_brand');

        $category = Http::withHeaders([
            'Authorization' => 'Bearer pathCnVHzPHzkdZT0.1bc756d02ec7ed26a492f2fc5945d9711ef0825ddba9912cd6a62df6e0740351'
        ])->get('https://api.airtable.com/v0/appbk25M6lGwgaVjW/item_category');

        $item = Http::withHeaders([
            'Authorization' => 'Bearer pathCnVHzPHzkdZT0.1bc756d02ec7ed26a492f2fc5945d9711ef0825ddba9912cd6a62df6e0740351'
        ])->get('https://api.airtable.com/v0/appbk25M6lGwgaVjW/items');

        $cate  = $category['records'];
        $bra  = $brand['records'];
        $ite  = $item['records'];

        $test = Http::get('https://tubaguskresnabayu.site/assets/dummy_response/flight.json');

        dd($test->json());


        
        // dd($cate);
        // dd($ite);
    });

