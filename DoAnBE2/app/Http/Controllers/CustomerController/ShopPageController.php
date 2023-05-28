<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopPageController extends MainCustomerController
{
    //Start func shop-page
    public function show()
    {
        $listProduct = Product::getPaginationProducts(9);
        $listCategory = Category::getAllCategory();
        return view('CustomerInterface/shop-grid',['listProduct'=>$listProduct, 'listCategory'=>$listCategory]);
    }
    public function showProductByCategory(Request $request)
    {
        $listProduct = Product::getPaginationProductsByCategoryID($request->category_id,9);
        $request->session()->put('categoryId',$request->category_id);
        $listCategory = Category::getAllCategory();
        return view('CustomerInterface/shop-grid',['listProduct'=>$listProduct, 'listCategory'=>$listCategory]);
    }
     //End func shop-page

}
