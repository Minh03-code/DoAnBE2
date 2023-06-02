<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class BillManagementPageController extends MainAdminController
{
    public function showBill(){
        $listBills = Bill::getPaginationBills(10);

        return view('AdminInterface/bill-management', ['listBills' => $listBills]);
    }

    public function deleteBillByBillID(Request $request)
    {
        Bill::where('id', '=', $request->billId)->delete();
        return redirect('admin/bill-management')->with('success', 'Xoa thanh cong');
    }

}
