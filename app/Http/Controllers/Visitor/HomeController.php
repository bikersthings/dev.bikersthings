<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Collection;

class HomeController extends Controller
{
    function index() {

        // $responseBrands = Http::withHeaders([
        //     'Authorization' => 'Bearer pathCnVHzPHzkdZT0.1bc756d02ec7ed26a492f2fc5945d9711ef0825ddba9912cd6a62df6e0740351'
        // ])->get('https://api.airtable.com/v0/appbk25M6lGwgaVjW/item_brand');
        // $brands = $responseBrands['records'];

        // $responseCategories = Http::withHeaders([
        //     'Authorization' => 'Bearer pathCnVHzPHzkdZT0.1bc756d02ec7ed26a492f2fc5945d9711ef0825ddba9912cd6a62df6e0740351'
        // ])->get('https://api.airtable.com/v0/appbk25M6lGwgaVjW/item_category');
        // $categories = $responseCategories['records'];

        // $responseItems = Http::withHeaders([
        //     'Authorization' => 'Bearer pathCnVHzPHzkdZT0.1bc756d02ec7ed26a492f2fc5945d9711ef0825ddba9912cd6a62df6e0740351'
        // ])->get('https://api.airtable.com/v0/appbk25M6lGwgaVjW/items');
        // $items = $responseItems['records'];



        // Fetch IceBox
        $responseIceBox = Http::get('https://bigdigidev.my.id/assets/dummy_response/iceboxes.json');
        $iceboxes = json_decode($responseIceBox, true);
        foreach ($iceboxes['data'] as &$item){
            $join = $item['ib_participants']['0']['ib_participant_join'];
            $total = $item['ib_participants']['0']['ib_participant_limit'];
            $left = $total - $join;
            $percent = ($join/$total)*100;

            $item['ib_participants']['0']['ib_participant_left'] = $left;
            $item['ib_participants']['0']['ib_participant_percentage'] = intval($percent);

            $priceNormal = $item['ib_price_ice_coupon'];
            $item['ib_price_ice_coupon_thousand'] = number_format($priceNormal, 0, ',', '.'); //Tambah response harga pakai separator ribuan
        };

        // Fetch Items
        $responseItems = Http::get('https://bigdigidev.my.id/assets/dummy_response/items.json');
        $items = json_decode($responseItems, true);
        foreach ($items['data'] as &$item){
            $priceNormal = $item['item_price'];
            $item['item_price_pointed'] = number_format($priceNormal, 0, ',', '.'); //Tambah response harga pakai separator ribuan
        };
        $itemss = array_slice($items['data'], 0, 1);

        // Filter Fetched Item by item_type_id WTS (Item Type 0)
        $itemTypeWTS = 0;
        $filteredItemWTS = 
        array_values(
            array_slice(
                array_filter($items['data'], fn($item) => $item['item_type']['item_type_id'] == $itemTypeWTS), 
            0,6)
        );

        // Filter Fethced Item by item_type_id WTB (Item Type 1)
        $itemTypeWTB = 1;
        $filteredItemWTB = 
        array_values(
            array_slice(
                array_filter($items['data'], fn($item) => $item['item_type']['item_type_id'] == $itemTypeWTB), 
            0,6)
        );

        // dd($itemss);

        return view('page-visitor.home.main',compact('iceboxes','filteredItemWTS','filteredItemWTB','items'));

    }
}
