<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailPageController extends MainCustomerController
{
    // Start func detail v1.0
    public function show(Request $request)
    {
        $sanpham = Product::getProductByID($request->id);
        $sanphamlienquan = Product::getProductsByCategoryNumberLimit(4,$sanpham['category_id']);
        return view('CustomerInterface/shop-details',['sanpham'=>$sanpham,'sanphamlienquan'=>$sanphamlienquan]);
    }
    // End func detail v1.0
}
