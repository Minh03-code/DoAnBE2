<?php

namespace App\Http\Controllers\AccountController;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginPageController extends Controller
{
    public function checkLogin(Request $request)
    {
        $accountID = -1;
        if ($request->method('post')) {
            $username = $request->input('username');
            $password = $request->input('password');
            if (Hash::check($password, Account::where('username', $username)->first()->password) == true) {

                $accountID = Account::where([
                    ['username', $username]
                ])->first()->id;
                
            }
        }

       
        session()->put('account',$accountID);
        $products = Product::getProductByNumberLimit(16);
        $categories = Category::getAllCategory();
        return view('CustomerInterface/index',['products'=>$products,'categories'=>$categories]);
    }

    public function logout(Request $request)
    {

     
        session()->forget('account');

        $products = Product::getProductByNumberLimit(16);
        $categories = Category::getAllCategory();
        return view('CustomerInterface/index',['products'=>$products,'categories'=>$categories]);
    }
    
}
