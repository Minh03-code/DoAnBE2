<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function ResultSearchOnShopPage(Request $request){
        $search = $request->search;
        $resultSearch = Product::getProductsBySearchKeyword($search);
        if($search == ""){
            $resultSearch = Product::all()->sortByDesc('id');
        }
        return view('CustomerInterface/search',['searchResults' => $resultSearch]);
    }
}
