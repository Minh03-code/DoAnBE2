<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactManagementPageController extends MainAdminController
{
    public function show(Request $request)
    {
        $contact = Contact::getAllDataInContactTable();
        return view('AdminInterface/form-contact',['contact' => $contact]);
    }
}
