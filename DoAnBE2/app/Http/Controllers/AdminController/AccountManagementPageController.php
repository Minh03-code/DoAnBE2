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

    public function changeStatusAccountByAccountID(Request $request)
    { 
        $account = Account::where('id', '=', $request->accountId)->first();
        $status = $account->status;
        if ($status == 1){   
            $data = [
                'status' => 0
            ];                                                 
        }
        else{
            $data = [
                'status' => 1
            ]; 
        }
        $account->update($data);
        return redirect('admin/account-management');
    }
}
