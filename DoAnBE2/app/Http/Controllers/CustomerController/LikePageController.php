<?php

namespace App\Http\Controllers\CustomerController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLike;
use Illuminate\Http\Request;

class LikePageController extends MainCustomerController
{
  public function likePage()
  {

    if (session('account','1') != null) {
      $i = +session('account','1');
      $mangSpYeuThich = Product::getAllProductsLikedByAccountID($i);
      return view('CustomerInterface/like', ['mangSpYeuThich' => $mangSpYeuThich]);
    }
    return null;
  }

  //deleteItemInProductsLiked
  public function deleteItemInProductsLiked(Request $request)
  {
    $accountId = session('account');
    ProductLike::where([['account_id', '=', $accountId], ['product_id', '=', $request->productId]])->delete();
    return redirect('like')->with('success', 'Xoa thanh cong');
  }
}
