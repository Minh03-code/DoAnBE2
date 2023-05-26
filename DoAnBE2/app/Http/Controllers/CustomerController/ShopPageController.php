<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopPageController extends MainCustomerController
{
    //Start func shop-page
    public function show(Request $request)
    {
        $listProduct = Product::getPaginationProducts(9,2);
        $listCategory = Category::getAllCategory();
        return view('CustomerInterface/shop-grid',['listProduct'=>$listProduct, 'listCategory'=>$listCategory]);
    }
     //End func shop-page

}
