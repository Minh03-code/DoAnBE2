<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ProductManagementPageController extends MainAdminController
{
    public function getPaginationProducts(Request $request)
    {
        $result = Product::getPaginationProducts(1);
        return view('AdminInterface.product-management', ["listProduct"=>$result]);
	}
    public function showProductForEditPage(Request $request)
    {
        $product = Product::getProductByID($request->id);
        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['product'=>$product,'categories'=>$categories]);
    }

    public function createNewProduct(Request $request){
        $productName = 'product-name';
        $ten = $request->$productName;
        $productPrice = 'product-price';
        $gia = $request->$productPrice;
        $productDescription = 'product-description';
        $mota = $request->$productDescription;
        $productImage = 'product-image';
        $image = $request->$productImage;
        //Lấy cái tên ảnh
        $anh = $image->getClientoriginalName();
        $categoryId = 'category-id';
        $danhmuc = $request->$categoryId;
        $ngaygiohientai = Date::now();
        $scheduleTime = Carbon::createFromTimestampUTC($ngaygiohientai)->diffInSeconds();
        $duoiAnh = $image->getClientOriginalExtension();
        $chuoitenAnh = $scheduleTime.'.'.$duoiAnh;
        Product::create(['name'=>$ten,'price'=>$gia,'image'=>$chuoitenAnh,'description'=>$mota,'category_id'=>$danhmuc]);
        //Di chuyển ảnh vào project thành công
        $image->move(public_path('img'),$chuoitenAnh);

        $result = Product::getPaginationProducts(1);
        return view('AdminInterface.product-management', ["listProduct"=>$result]);

       
    }
    public function getCategoryForAddNewProductPage()
    {
        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['categories'=>$categories]);
    }
}
