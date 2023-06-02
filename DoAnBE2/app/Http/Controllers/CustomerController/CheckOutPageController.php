<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillProduct;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckOutPageController extends MainCustomerController
{
    public function getItemsInCartTableByAccountID()
    {
        $result = Cart::getItemsInCartTableByAccountID(session('account'));
        return view('CustomerInterface.checkout', ["listProductOfAccount" => $result]);
    }
    public function createBillByAccountID(Request $request)
    {
        $accountID = 1;
        Bill::create([
            'account_id' => $accountID,
            'name' => $request->customerName,
            'address' => $request->customerAddress,
            'phone_number' => $request->customerPhoneNumber,
            'email' => $request->customerEmail,
            'order_notes' => $request->customerNote,
            'payment_method' => $request->paymentType,
            'status' => 0
        ]);
        $billID = Bill::orderBy('id', 'DESC')->first()->id;
        $listCartByAccount = Cart::getItemsInCartTableByAccountID($accountID);
        foreach ($listCartByAccount as $item){
            BillProduct::create([
                'bill_id' => $billID,
                'product_id' => $item->product_id,
                'product_name' => $item->product_name,
                'product_price' => $item->product_price,
                'product_image' => $item->product_image,
                'quantity' => $item->quantity
            ]);
        }
        Cart::where('account_id', $accountID)->delete();
        return redirect('bill-history');
    }
}
