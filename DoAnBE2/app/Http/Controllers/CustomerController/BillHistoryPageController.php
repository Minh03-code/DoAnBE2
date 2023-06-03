<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Contact;
use Illuminate\Http\Request;

class BillHistoryPageController extends MainCustomerController
{
    public function showBill(){
        $accountID = session()->get('account');
        $bills = Bill::getPaginationBillsByAccountID($accountID, 5);
        $contact = Contact::getAllDataInContactTable();
        return view('CustomerInterface/bill-history', ["bills" => $bills, "contact" => $contact]);
    }
}
