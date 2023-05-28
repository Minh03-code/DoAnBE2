<?php

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


Route::get('form-profile', function () {
    return view('CustomerInterface/form-profile');
})->name('form-profile'); 
Route::get('change-password', function () {
    return view('CustomerInterface/change-password');
})->name('change-password'); 
Route::get('bill-history', [BillHistoryPageController::class, 'showBill'])->name('bill-history'); 

// Login Register
Route::get('login', function () {
    return view('LoginRegister/login');
})->name('login'); 
Route::get('register', function () {
    return view('LoginRegister/register');
})->name('register');

// Admin interface
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    
    Route::get('/', function () {
        return view('AdminInterface/product-management');
    })->name('product-management');

    //Start Product-Management
    Route::get('/product-management', [ProductManagementPageController::class, 'getPaginationProducts'])->name('product-management');
    Route::get('/category-management', [CategoryManagementPageController::class, 'showCategory'])->name('category-management');
    Route::get('/bill-management', [BillManagementPageController::class, 'showBill'])->name('bill-management');

    Route::get('/account-management', function () {
        return view('AdminInterface/account-management');
    })->name('account-management');
    Route::get('/add-product', function () {
        return view('AdminInterface/form-product');
    })->name('add-product');
    Route::get('/edit-product', function () {
        return view('AdminInterface/form-product');
    })->name('edit-product');
    Route::get('/add-category', function () {
        return view('AdminInterface/form-category');
    })->name('add-category');
    Route::get('/edit-category', function () {
        return view('AdminInterface/form-category');
    })->name('edit-category');
    Route::get('/form-profile', function () {
        return view('AdminInterface/form-profile');
    })->name('form-profile');
    Route::get('/change-password', function () {
        return view('AdminInterface/change-password');
    })->name('change-password');
    Route::get('/contact-management', function () {
        return view('AdminInterface/form-contact');
    })->name('contact-management');
});

