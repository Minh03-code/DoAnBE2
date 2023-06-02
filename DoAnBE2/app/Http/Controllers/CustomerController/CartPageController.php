<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
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
        return view('CustomerInterface.shoping-cart', ["listProductOfAccount" => $result]);
    }

    public function addToCartByAccountID(Request $request)
    {
        $accountID = session()->get('account');
        $product = Product::getProductByID($request->productID);
        if (Cart::where([
            ['account_id', '=', $accountID],
            ['product_id', '=', $product->id]
            ])->first() == null) {
            Cart::create([
                'account_id' => $accountID,
                'product_id' => $product->id,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image,
                'quantity' => 1
            ]);
        }
        return view('CustomerInterface.shoping-cart', ["listProductOfAccount" => Cart::getItemsInCartTableByAccountID($accountID)]);
    }
}
