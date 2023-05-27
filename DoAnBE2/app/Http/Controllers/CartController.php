<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getItemsInCartTableByAccountID(Request $request)
    {
        $result = Cart::getItemsInCartTableByAccountID(1);
        return view('CustomerInterface.checkout', ["listProductOfAccount" => $result]);
    }
}
