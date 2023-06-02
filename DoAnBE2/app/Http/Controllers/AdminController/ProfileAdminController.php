<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileAdminController extends MainAdminController
{
    public function show(Request $request){
        $profile = Profile::getProfileByAccountID(1);
        return view('AdminInterface.form-profile', ['profile' => $profile]);
    }
    public function editProfile(Request $request){
        $profile = Profile::find(1); //lam xong dang nhap doi sau
        if (isset($profile)) {
            $profileName = 'edit-name-customer';
            $profileAddress = 'address';
            $profileEmail = 'edit-email';
            $profilePhone = 'edit-phone';

            $profile->name = $request->$profileName;
            $profile->phone_number = $request->$profilePhone;
            $profile->address = $request->$profileAddress;
            $profile->email = $request->$profileEmail;

            if (isset($request->$profileName) && $request->$profileAddress && $request->$profilePhone && $request->$profileEmail) {
                $profile->update();
                return redirect()->route('admin.form-profile')->with('status', 'Thêm Thành Công');
            }
        }
        return redirect()->route('admin.form-profile')->with('empty', 'Thêm Thất Thành Công');
    }
}