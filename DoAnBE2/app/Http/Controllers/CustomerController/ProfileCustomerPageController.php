<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileCustomerPageController extends MainCustomerController
{
    public function edit_profile(){
        $profile = Profile::getProfileByAccountID(1);

        return view('CustomerInterface/form-profile',['profile' => $profile]);
    }
}
