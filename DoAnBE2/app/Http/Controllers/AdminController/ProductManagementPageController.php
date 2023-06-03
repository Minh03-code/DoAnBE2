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
        $categoryId = 'category-id';
        $danhmuc = $request->$categoryId;
        $productImage = 'product-image';
        $image = $request->$productImage;
        if(isset($request->$productName)&&$request->$productPrice&&$request->$productDescription&&$request->$categoryId){
            $ngaygiohientai = Date::now();
        $scheduleTime = Carbon::createFromTimestampUTC($ngaygiohientai)->diffInSeconds();
        $duoiAnh = $image->getClientOriginalExtension();
        $chuoitenAnh = $scheduleTime.'.'.$duoiAnh;
        Product::create(['name'=>$ten,'price'=>$gia,'image'=>$chuoitenAnh,'description'=>$mota,'category_id'=>$danhmuc]);
        //Di chuyển ảnh vào project thành công
        $image->move(public_path('img'),$chuoitenAnh);

        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['categories'=>$categories])->with('thongbao',"Thêm Món Ăn Thành Công!");
        }else{
            $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['categories'=>$categories])->with('thongbao',"Thêm Món Ăn Không Thành Công!");
        }
        //Lấy cái tên ảnh
        
       
    }
    public function getCategoryForAddNewProductPage()
    {
        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['categories'=>$categories]);
    }
    public function editProductInformationByProduct(Request $request){
        $result = Product::getPaginationProducts(1);
        $product = Product::find($request->id);
        // dd($product);
        if(isset($product)){
            $productName = 'product-name';
            
            $productPrice = 'product-price';
           
            $productDescription = 'product-description';
           
            $categoryId = 'category-id';
            
            $productImage = 'product-image';
           


            $product->name = $request->$productName;
            $product->price = $request->$productPrice;
            $product->description = $request->$productDescription;
            $product->category_id = $request->$categoryId;
            $image = $request->$productImage;
            if(isset($request->$productName)&&$request->$productPrice&&$request->$productDescription&&$request->$categoryId){
                if(isset($image)){
                    $ngaygiohientai = Date::now();
                    $scheduleTime = Carbon::createFromTimestampUTC($ngaygiohientai)->diffInSeconds();
                    $duoiAnh = $image->getClientOriginalExtension();
                    $chuoitenAnh = $scheduleTime.'.'.$duoiAnh;
                    $product->image = $chuoitenAnh;
                    $image->move(public_path('img'),$chuoitenAnh);
                }
                $product->update();
                $categories = Category::getAllCategory();
                return view('AdminInterface/form-product',['product'=>$product,'categories'=>$categories])->with('thongbao',"Cập Nhật Thành Công!");
            }
           
        }
        $categories = Category::getAllCategory();
        return view('AdminInterface/form-product',['product'=>$product,'categories'=>$categories])->with('thongbao',"Cập Nhật Không Thành Công!");
    }
     public function changeStatusOfProductByProduct(Request $request)
    {
        $product = Product::find($request->id);
        if($product->status==0)
        {
        $product->status = 1;
        }
        else{
            $product->status = 0;
        }
        $product->update();
        return redirect('admin/product-management');
        
    }
}
