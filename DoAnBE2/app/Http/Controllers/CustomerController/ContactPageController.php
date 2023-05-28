<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactPageController extends MainCustomerController
{
    //Start func contact
    public function show(Request $request)
    {
            $contact = Contact::getAllDataInContactTable();
            return view('CustomerInterface/contact',['contact' => $contact]);
    }
    //End func contact
}
