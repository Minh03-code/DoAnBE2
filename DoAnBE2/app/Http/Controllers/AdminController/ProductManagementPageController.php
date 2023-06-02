<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementPageController extends MainAdminController
{
    public function getPaginationProducts(Request $request)
    {
        $result = Product::getPaginationProducts(1);
        return view('AdminInterface.product-management', ["listProduct"=>$result]);
	}
    public function showProductForEditPage(Request $request)
    {
        $product = Product::getProductByID($request->id);
        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['product'=>$product,'categories'=>$categories]);
    }

    public function changeStatusOfProductByProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->status = 1;
        $product->update();
        return redirect('admin/product-management');
        
    }
}
