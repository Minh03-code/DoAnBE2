<?php

namespace App\Http\Controllers\AdminController;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountManagementPageController extends MainAdminController
{
    public function getPaginationAccount(Request $request)
    {
        $result = Account::getPaginationAccount(5);
        return view('AdminInterface.account-management', ["listAccount"=>$result]);
    }
}
