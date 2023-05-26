<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementPageController extends MainAdminController
{
    public function editProduct(Request $request)
    {
        $product = Product::getProductByID($request->id);
        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['product'=>$product,'categories'=>$categories]);
    }
}
