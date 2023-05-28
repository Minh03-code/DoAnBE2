<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementPageController extends MainAdminController
{
    public function getPaginationProducts(Request $request)
    {
        $result = Product::getPaginationProducts(1);
        return view('AdminInterface.product-management', ["listProduct"=>$result]);
    }
}
