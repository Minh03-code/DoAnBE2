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
    public function addCategory(Request $request){
        $truongDuLieuAnh = "category-image";
        if($request->$truongDuLieuAnh != null && $request->input('category-name') != null && $request->input('category-description')){
        $image = $request->$truongDuLieuAnh;
        $img_name = time().'.'.$request->$truongDuLieuAnh->extension();
        $image->move(public_path('img'),$img_name);
        $category = new Category();
        $category->name = $request->input('category-name');
        $category->image = $img_name;
        $category->description = $request->input('category-description');
        $category->save();
        return redirect()->route('admin.category-management')->with('status', 'Image Has been uploaded');
        }else{
        return redirect()->route('admin.category-management')->with('dataempty', 'data field cannot be empty');
        }
    }
}
