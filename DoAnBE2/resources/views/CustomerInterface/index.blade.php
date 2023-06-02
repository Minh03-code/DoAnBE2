@php
use App\Models\ProductLike;
@endphp
@extends('CustomerInterface/main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Trang chủ</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('login') }}">Đăng nhập</a>
                            <span>NDMHPteam</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                @foreach($categories as $cate)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/{{$cate->image}}">
                            <h5><a href="#">{{$cate->name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm đặc sắc</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach($categories as $cate)
                            <li data-filter=".c{{$cate->id}}">{{$cate->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix c{{$product->category_id}}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/{{$product->image}}">
                            <ul class="featured__item__pic__hover">
                               
                                <li><a href="{{ route('add-to-cart', ['productID'=>$product->id]) }}"><i class="fa fa-shopping-cart"></i></a></li>

                                <li><a href="{{route('likeProduct',['id'=>$product->id])}}"><i class="fa fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$product->name}}</a></h6>
                            <h5>${{$product->price}}</h5>
                            <h6>Lượt thích: {{ ProductLike::countLikeByProductID($product->id) }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
@endsection
