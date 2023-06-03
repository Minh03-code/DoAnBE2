<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ContactManagementPageController extends MainAdminController
{
    public function show(Request $request)
    {
        $contact = Contact::getAllDataInContactTable();
        return view('AdminInterface/form-contact', ['contact' => $contact]);
    }

    public function changeContact(Request $request)
    {
        if (!empty($request->imageBannerWeb)) {
            $image_banner = $request->imageBannerWeb;
            $ngaygiohientai = Date::now();
            $scheduleTime = Carbon::createFromTimestampUTC($ngaygiohientai)->diffInSeconds();
            $duoiAnh = $image_banner->getClientOriginalExtension();
            $chuoitenAnh = $scheduleTime . '.' . $duoiAnh;
            $image_banner->move(public_path('img'), $chuoitenAnh);

            Contact::where('id', 1)->update([
                'logo' => $request->logo,
                'address' => $request->address,
                'phone' => $request->phone,
                'open_time' => $request->openTime,
                'close_time' => $request->closeTime,
                'email' => $request->email,
                'image_banner' => $chuoitenAnh,
            ]);


            return redirect('admin/contact-management')->with('thongbao', "Cập nhật thông tin liên lạc thành công!");
          
        }
        return redirect('admin/contact-management')->with('thongbao', "Cập nhật thông tin liên lạc không thành công!");
    }
}
