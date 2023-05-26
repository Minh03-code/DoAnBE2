<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryManagementPageController extends MainAdminController
{
    public function edit_category(Request $request){
        $category = Category::find($request->id);
        return view('AdminInterface/form-category',['category'=>$category]);
    }
}
