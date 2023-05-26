<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends MainCustomerController
{
    public function homePage()
    {
        $products = Product::getProductByNumberLimit(16);
        $categories = Category::getAllCategory();
        return view('CustomerInterface/index',['products'=>$products,'categories'=>$categories]);
    }
}
