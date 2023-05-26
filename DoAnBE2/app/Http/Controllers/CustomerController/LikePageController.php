<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class LikePageController extends MainCustomerController
{
    public function likePage()
    {
        
        if(session('account')!=null)
        {
          $i = +session('account');
          $mangSpYeuThich = Product::getAllProductsLikedByAccountID($i);
          return view('CustomerInterface/like',['mangSpYeuThich'=>$mangSpYeuThich]);
        }
        return null;
    }
}
