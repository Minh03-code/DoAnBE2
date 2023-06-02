<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLike;
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
    public function likeProductForAccountID(Request $request)
    {
        if(session()->has('account')){
            ProductLike::create(['product_id'=>$request->id,'account_id'=>session()->get('account')]);
            return back()->withInput();
        }else{
            return view('LoginRegister/login');
        }
    }
}
