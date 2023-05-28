<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckOutPageController extends MainCustomerController
{
    public function getItemsInCartTableByAccountID()
    {
        $result = Cart::getItemsInCartTableByAccountID(session('account'));
        return view('CustomerInterface.checkout', ["listProductOfAccount" => $result]);
    }
}
