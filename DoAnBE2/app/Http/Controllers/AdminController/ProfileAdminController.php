<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileAdminController extends MainAdminController
{
    public function show(){
        $profile = Profile::getProfileByAccountID(1);
        return view('AdminInterface.form-profile', ['profile' => $profile]);
    }
}
