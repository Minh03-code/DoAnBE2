<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryManagementPageController extends MainAdminController
{
    public function showCategory(){
        $listCategory = Category::getPaginationCategories(10);

        return view('AdminInterface/category-management', ['listCategory' => $listCategory]);
	}
    public function showCategoryForEditPage(Request $request){
        $category = Category::find($request->id);
        return view('AdminInterface/form-category',['category'=>$category]);
    }
}
