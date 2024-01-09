<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemDetailController extends Controller
{
    function index () {

        $responseItemDetail = Http::get('https://tubaguskresnabayu.site/assets/dummy_response/itemDetail.json');
        $itemDetail = json_decode($responseItemDetail, true);
        $priceNormal = $itemDetail['data']['item']['item_price'];
        $itemDetail['data']['item']['item_price_thousand'] = number_format($priceNormal, 0, ',', '.'); //Tambah response harga pakai separator ribuan

        // dd($itemDetail);

        return view('page-visitor.item-detail.main',compact('itemDetail'));
    }
}
