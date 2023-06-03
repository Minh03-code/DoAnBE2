@extends('CustomerInterface/main')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Like</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <span>Danh sách yêu thích</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mangSpYeuThich as $item)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('img/'.$item->image)}}" alt="" style="width:100px;height:100px;">
                                        <h5>{{$item->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$item->price}} vnđ
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{route('deleteItemInProductsLiked', ['productId' => $item->id])}}"><span  class="icon_close" ></span></a>
                                    </td>
                                    <td>
                                                <a class="btn btn-primary" href="{{route('add-to-cart', ['productID'=>$item->id])}}"><i class="fa fa-shopping-cart"></i></a>
                                            </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
