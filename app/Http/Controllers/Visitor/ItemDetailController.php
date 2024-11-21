<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemDetailController extends Controller
{
    function index () {

        $responseItemDetail = Http::get('https://bigdigidev.my.id/assets/dummy_response/itemDetail.json');
        $itemDetail = json_decode($responseItemDetail, true);
        $priceNormal = $itemDetail['data']['item']['item_price'];
        $itemDetail['data']['item']['item_price_thousand'] = number_format($priceNormal, 0, ',', '.'); //Tambah response harga pakai separator ribuan
        $sosmeds = $itemDetail['data']['user']['social'];
        $images = $itemDetail['data']['item']['item_photo'];
        // dd($images);

        return view('page-visitor.item-detail.main',compact('itemDetail','sosmeds', 'images'));
    }
}
