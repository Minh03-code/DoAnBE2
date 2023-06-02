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

    public function changeContact(Request $request)
    {
        Contact::where('id', 1)->update([
            'logo'=>$request->logo,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'open_time'=>$request->open_time,
            'clone_time'=>$request->clone_time,
        ]);
        return redirect('contact-management');
    }
}
