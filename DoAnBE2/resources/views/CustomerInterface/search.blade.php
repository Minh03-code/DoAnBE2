@extends('CustomerInterface/main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sản Phẩm</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ </a>
                            <span>Có tất cả {{ $searchResults->count() }} sản phẩm được tìm thấy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    @if (count($searchResults) == 0)
        <h1>Không có sản phẩm</h1>
    @else
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
                                        <th>Thông Tin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($searchResults as $item)
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <img src="img/cart/cart-1.jpg" alt="">
                                                <h5>{{ $item->name }}</h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                {{ $item->price }}
                                            </td>
                                            <td class="shoping__cart__description">
                                                {{ $item->description }}
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
    @endif
    <!-- Shoping Cart Section End -->
@endsection
