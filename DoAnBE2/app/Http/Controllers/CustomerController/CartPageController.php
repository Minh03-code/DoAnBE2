<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartPageController extends Controller
{
    public function getItemsInCartTableByAccountID(Request $request)
    {
        //Tao sesson co bien la account voi gia tri la 1
        // $request->session()->put('account','1');
        //Truy xuat session account thong qua session('account');
        $result = Cart::getItemsInCartTableByAccountID(session('account'));
        //Xoa sesion account bang lenh pull('account');
        // $request->session()->pull('account');
        return view('CustomerInterface.shoping-cart', ["listProductOfAccount"=>$result]);
    }
}
