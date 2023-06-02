<?php

namespace App\Http\Controllers\AccountController;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPageController extends Controller
{
    public function register(Request $request)
    {
        $check = false;
        $username = $request->username;
        $password = $request->password;
        $comfirmPassword = $request->cfpassword;
        if ($password == $comfirmPassword) {
            if (Account::where('username', $username)->first('id') == null) {
                $check = Account::create(['username' => $username, 'password' => Hash::make($password)]);

            }
        }
        if ($check) {
            return view('LoginRegister/register', ["thongbao" => 1]);
        }
        return view('LoginRegister/register', ["thongbao" => 2]);
        
    }
}
