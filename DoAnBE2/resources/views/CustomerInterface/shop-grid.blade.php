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
                        <h2>Cửa hàng NDMHPteam</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <span>Cửa hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
{{-- Start func  shop-page --}}

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục</h4>
                            @foreach ($listCategory as $listC)
                            <ul>
                                <li><a href="{{route('shop-category',["category_id"=>$listC->id])}}">{{$listC->name}}</a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="row">
                         @foreach ($listProduct as $listP)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('img/'.$listP->image)}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{ route('detail', ["id"=>$listP->id])}}">{{$listP->name}}</a></h6>
                                    <h5>${{$listP->price}}</h5>
                                    
                                    <h6>Lượt thích: {{ ProductLike::countLikeByProductID($listP->id) }}</h6>
                                </div>
                            </div>
                        </div>
                         @endforeach
                    </div>
                    {{-- Kiểm tra xem có tồn tại session categoryId hay không
                        Câu lệnh Session::has('categoryId') để truy xuất session trong html --}}
                    @if(Session::has('categoryId'))
                    {{-- Session::get('categoryId') dùng để truy xuất đến dữ liệu session --}}
                    {{$listProduct->appends(['category_id' => Session::get('categoryId')])->links('pagination::bootstrap-5')}}
                    @else
                    {{$listProduct->links('pagination::bootstrap-5')}}
                    @endif
                    @if(Session::has('categoryId'))
                   {{
                    // Câu lệnh này dùng để xóa session trong html
                        Session::forget('categoryId')
                   }}
                   @endif
                </div>
            </div>
        </div>
    </section>
{{-- End func  shop-page --}}
    @endsection