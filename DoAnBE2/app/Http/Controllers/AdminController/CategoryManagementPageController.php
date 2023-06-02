<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryManagementPageController extends MainAdminController
{
    public function showCategory()
    {
        $listCategory = Category::getPaginationCategories(10);

        return view('AdminInterface/category-management', ['listCategory' => $listCategory]);
    }
    public function showCategoryForEditPage(Request $request)
    {
        $category = Category::find($request->id);
        return view('AdminInterface/form-category', ['category' => $category]);
    }
    public function editCategory(Request $request)
    {
        $category = Category::find($request->id);
        if (isset($category)) {
            $categoryName = 'category-name';

            $categoryDescription = 'category-description';

            $category->name = $request->$categoryName;
            $category->description = $request->$categoryDescription;
            if (isset($request->$categoryName) && $request->$categoryDescription) {
                $truongDuLieuAnh = "category-image";
                $image = $request->$truongDuLieuAnh;
                $img_name = time() . '.' . $request->$truongDuLieuAnh->extension();
                $image->move(public_path('img'), $img_name);
                $category->image = $img_name;
                $category->update();
                return redirect()->route('admin.category-management')->with('status', 'Image Has been uploaded');
            }
        }
        return redirect()->route('admin.category-management')->with('dataempty', 'data field cannot be empty');
    }
}
