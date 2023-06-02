@extends('CustomerInterface/main')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thủ tục thanh toám</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <span>Thủ tục thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Chi tiết thanh toán</h4>
                <form action="{{ route('info-receive') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Tên khách hàng<span>*</span></p>
                                <input type="text" placeholder="Nhập tên khác hàng" name="customerName">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ nhận hàng<span>*</span></p>
                                <input type="text" placeholder="Nhập địa chỉ nhận hàng" class="checkout__input__add" name="customerAddress">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại liên hệ<span>*</span></p>
                                        <input type="text" placeholder="Nhập số điện thoại" name="customerPhoneNumber">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" placeholder="Nhập địa chỉ email" name="customerEmail">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú đặt hàng<span>*</span></p>
                                <input type="text" placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ như ghi chú đặc biệt cho việc giao hàng." name="customerNote">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn đặt hàng của bạn</h4>
                                @php
                                    $total = 0;
                                @endphp
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    {{-- <li>Sản phẩm 1 <span>Giá</span></li> --}}
                                    @foreach ($listProductOfAccount as $item)
                                        <li>{{$item->product_name}}<span>${{$item->product_price * $item->quantity}}</span></li>
                                        @php
                                            $total += $item->product_price * $item->quantity;
                                        @endphp
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>${{$total}}</span></div>
                                <div class="checkout__order__total">Total <span>${{$total}}</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment-online">
                                        Thanh toán online
                                        <input type="radio" id="payment-online" name="paymentType" value="0" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment-offline">
                                        Thanh toán trực tiếp
                                        <input type="radio" id="payment-offline" name="paymentType" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <input type="submit" value="ĐẶT HÀNG" class="primary-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
