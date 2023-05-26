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
        return view('CustomerInterface/shop-details',['sanpham'=>$sanpham]);
    }
    // End func detail v1.0
}
