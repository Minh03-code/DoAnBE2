<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordCustomerPageController extends MainCustomerController
{

    public function changePassWord(Request $request)
    {

        $accountID = -1;
        if ($request->method('post')) {
            $oldPassword = $request->input('oldPassword');
            $newPassword = $request->input('newPassword');
            $confirmPassword = $request->input('confirmPassword');

            if (Account::where('id', $accountID)->first() != null) {
                if (Hash::check($oldPassword, Account::where('id', $accountID)->first()->password) == true) {
                    if ($newPassword == $confirmPassword) {
                        Account::where('id', $accountID)->update(['password' => Hash::make($newPassword)]);
                        return view('CustomerInterface/change-password')->with('thongbao',1);
                    }
                }
            }
        }
        return view('CustomerInterface/change-password')->with('thongbao',2);

    }
}
