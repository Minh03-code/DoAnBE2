<?php

use App\Http\Controllers\AccountController\LoginPageController;
use App\Http\Controllers\AccountController\RegisterPageController;
use App\Http\Controllers\CustomerController\HomePageController;
use App\Http\Controllers\CustomerController\ShopPageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CustomerController\DetailPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController\CartPageController;
use App\Http\Controllers\CustomerController\CheckOutPageController;
use App\Http\Controllers\CustomerController\BillHistoryPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController\ContactPageController;
use App\Http\Controllers\CustomerController\LikePageController;
use App\Http\Controllers\AdminController\ProductManagementPageController;
use App\Http\Controllers\AdminController\CategoryManagementPageController;
use App\Http\Controllers\AdminController\BillManagementPageController;
use App\Http\Controllers\AdminController\AccountManagementPageController;
use App\Http\Controllers\AdminController\ContactManagementPageController;
use App\Http\Controllers\CustomerController\ProfileCustomerPageController;
use App\Http\Controllers\AdminController\ProfileAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Customer intrface


Route::get('/', [HomePageController::class,'homePage'])->name('home');

Route::get('/home', [HomePageController::class,'homePage']
)->name('home');

 //Start func shop-page
Route::get('shop', [ShopPageController::class,'show'])->name('shop'); 
Route::get('shop-category',[ShopPageController::class,'showProductByCategory'])->name('shop-category'); 
 //Start func shop-page

// Start func detail v1.0
Route::get('detail', [DetailPageController::class,'show'])->name('detail'); 
// Start func detail v1.0

Route::get('cart', [CartPageController::class, 'getItemsInCartTableByAccountID'])->name('cart');

//Start func contact
Route::get('contact',[ContactPageController::class, 'show'])->name('contact'); 
//End func contact

//checkout
Route::get('checkout', [CheckOutPageController::class, 'getItemsInCartTableByAccountID'])->name('checkout'); 


Route::get('search',[SearchController::class,'ResultSearchOnShopPage'] )->name('search'); 


Route::get('like', [LikePageController::class,'likePage'])->name('like'); 


Route::get('likeProduct', [LikePageController::class,'likeProductForAccountID'])->name('likeProduct'); 

//deleteItemInProductsLiked
Route::get('deleteItemInProductsLiked', [LikePageController::class,'deleteItemInProductsLiked'])->name('deleteItemInProductsLiked'); 


Route::get('form-profile',[ProfileCustomerPageController::class,'edit_profile'])->name('form-profile'); 

Route::get('change-password', function () {
    return view('CustomerInterface/change-password');
})->name('change-password'); 
Route::get('bill-history', [BillHistoryPageController::class, 'showBill'])->name('bill-history'); 


 
Route::get('add-to-cart', [CartPageController::class, 'addToCartByAccountID'])->name('add-to-cart');


Route::post('edit-quantity-cart', [CartPageController::class, 'editQuantityOfItemInCartByAccountID'])->name('edit-quantity-cart');

Route::get('delete-item-in-cart', [CartPageController::class, 'deleteItemInCartByProductID'])->name('delete-item-in-cart'); 

Route::post('info-receive', [CheckOutPageController::class, 'createBillByAccountID'])->name('info-receive');


// Login Register
Route::get('login', function () {
    return view('LoginRegister/login');
})->name('login'); 

Route::post('login', [LoginPageController::class,'checkLogin'])->name('login'); 
// Logout
Route::get('louout', [LoginPageController::class,'logout'])->name('logout'); 
// End module login 


// Start Register
Route::get('register', function () {
    return view('LoginRegister/register');
})->name('register'); 
Route::post('create-account', [RegisterPageController::class, "register"])->name('create-account');
// End Register

// Admin interface
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    
    Route::get('/', function () {
        return view('AdminInterface/product-management');
    })->name('product-management');


    //Start Product-Management
    Route::get('/product-management', [ProductManagementPageController::class, 'getPaginationProducts'])->name('product-management');
    Route::get('/category-management', [CategoryManagementPageController::class, 'showCategory'])->name('category-management');
    Route::get('/bill-management', [BillManagementPageController::class, 'showBill'])->name('bill-management');
    //Start account-management
    Route::get('/account-management', [AccountManagementPageController::class, 'getPaginationAccount'])->name('account-management');

    Route::get('/add-product', [ProductManagementPageController::class,'getCategoryForAddNewProductPage'])->name('add-product');
     
     //Them sản phẩm
    Route::post('/createNewProduct', 
        [ProductManagementPageController::class,'createNewProduct']
    )->name('createNewProduct');
    //Them sản phẩm

    Route::get('/edit-product', [ProductManagementPageController::class,'showProductForEditPage'])->name('edit-product');
    //Sửa sản phẩm
    Route::post('/product-management', 
        [ProductManagementPageController::class,'editProductInformationByProduct']
    )->name('edit_product');

    Route::get('/edit-product', [ProductManagementPageController::class,'showProductForEditPage'])->name('edit-product');

    Route::get('/add-category', function () {
        return view('AdminInterface/form-category');
    })->name('add-category');

    Route::post('/add-category',[CategoryManagementPageController::class, 'addCategory'])->name('addCategory');;
    Route::get('/edit-category', [CategoryManagementPageController::class, 'showCategoryForEditPage'])->name('edit-category');
    
    Route::get('/form-profile', [ProfileAdminController::class, 'show'])->name('form-profile');

    Route::get('/change-password', function () {
        return view('AdminInterface/change-password');
    })->name('change-password');
    Route::get('/contact-management',[ContactManagementPageController::class,'show'])->name('contact-management');
});

