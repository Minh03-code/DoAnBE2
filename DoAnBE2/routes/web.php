<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController\CheckOutPageController;
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
Route::get('/', function () {
    return view('CustomerInterface/index');
})->name('home');
Route::get('/home', function () {
    return view('CustomerInterface/index');
})->name('home');
Route::get('shop', function () {
    return view('CustomerInterface/shop-grid');
})->name('shop'); 
Route::get('detail', function () {
    return view('CustomerInterface/shop-details');
})->name('detail'); 
Route::get('cart', function () {
    return view('CustomerInterface/shoping-cart');
})->name('cart'); 
Route::get('contact', function () {
    return view('CustomerInterface/contact');
})->name('contact'); 

//checkout
Route::get('checkout', [CheckOutPageController::class, 'getItemsInCartTableByAccountID'])->name('checkout'); 

Route::get('like', function () {
    return view('CustomerInterface/like');
})->name('like'); 
Route::get('form-profile', function () {
    return view('CustomerInterface/form-profile');
})->name('form-profile'); 
Route::get('change-password', function () {
    return view('CustomerInterface/change-password');
})->name('change-password'); 
Route::get('bill-history', function () {
    return view('CustomerInterface/bill-history');
})->name('bill-history'); 

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
    Route::get('/product-management', function () {
        return view('AdminInterface/product-management');
    })->name('product-management');
    Route::get('/category-management', function () {
        return view('AdminInterface/category-management');
    })->name('category-management');
    Route::get('/bill-management', function () {
        return view('AdminInterface/bill-management');
    })->name('bill-management');
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

