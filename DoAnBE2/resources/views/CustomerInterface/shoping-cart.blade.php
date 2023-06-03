@extends('CustomerInterface/main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('img/'.$contact->image_banner)}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <span>Giỏ hàng</span>
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
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($listProductOfAccount as $item)

                                      

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('/img/'.$item->product_image)}}" alt="">
                                        <h5>{{$item->product_name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        ${{$item->product_price}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <form action="{{ route('edit-quantity-cart')}}" method="POST">
                                                    @csrf
                                                    <input type="submit" value="-" class="qtybtn" name="btnqty">
                                                    <input type="text" value="{{ $item->quantity }}"
                                                        name="quantityItem">
                                                        <input type="hidden" name="itemID" value="{{ $item->product_id}}">
                                                    <input type="submit" value="+" class="qtybtn" name="btnqty">
                                                </form>
                                            </div>

                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        ${{$item->product_price * $item->quantity}}
                                        @php
                                            $total += $item->product_price * $item->quantity;
                                        @endphp
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{ route('delete-item-in-cart', ['itemID'=>$item->product_id]) }}"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng giỏ hàng</h5>
                        <ul>
                            <li>Tổng <span>${{ $total }}</span></li>
                        </ul>
                        <a href="{{ route('checkout') }}" class="primary-btn">THỦ TỤC THANH TOÁN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
