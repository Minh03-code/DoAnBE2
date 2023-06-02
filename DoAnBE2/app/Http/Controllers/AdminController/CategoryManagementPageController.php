<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


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
    public function ChangeStatusCategory(Request $request){
        $category = Category::where('id', '=', $request->id)->first();
        $status = $category->status;
        if ($status == 1){   
            $data = [
                'status' => 0
            ];                                                 
        }
        else{
            $data = [
                'status' => 1
            ]; 
        }
        $category->update($data);
        return redirect()->route('admin.category-management');
    }
}
