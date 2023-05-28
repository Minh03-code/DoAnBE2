@extends('CustomerInterface/main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Lịch sử mua hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <a href="{{ route('shop') }}">Cửa hàng</a>
                            <span>Hóa đơn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @if ($bills != null)
                    @foreach ($bills as $item)
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="invoice-container">
                                    <div class="invoice-header">


                                        <!-- Row start -->
                                        <div class="row gutters">
                                            @if ($contact != null)
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <a href="{{ route('home') }}" class="invoice-logo">
                                                        {{ $contact->logo }}
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <address class="text-right">
                                                        {{ $contact->email }}<br>
                                                        {{ $contact->address }}<br>
                                                        {{ $contact->phone }}
                                                    </address>
                                                </div>
                                            @endif
                                        </div>
                                        <!-- Row end -->

                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                                <div class="invoice-details">
                                                    <address>
                                                        {{ $item->name }}<br>
                                                        {{ $item->address }}
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                                <div class="invoice-details">
                                                    <div class="invoice-num" style="color: #8a99b5;">
                                                        <div>Invoice: #{{ $item->id }}</div>
                                                        <div>Date: {{ $item->created_at }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->

                                    </div>

                                    <div class="invoice-body">

                                        @php
                                            $total = 0;
                                        @endphp
                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="table-responsive">
                                                    <table class="table custom-table m-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Tên</th>
                                                                <th>ID sản phẩm</th>
                                                                <th>Số lượng</th>
                                                                <th>Giá</th>
                                                                <th>Tổng</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($item->products_of_bill as $productInBill)
                                                                <tr>
                                                                    <td>
                                                                        {{ $productInBill->product_name }}
                                                                    </td>
                                                                    <td>#{{ $productInBill->product_id }}</td>
                                                                    <td>{{ $productInBill->quantity }}</td>
                                                                    <td>{{ $productInBill->product_price }} vnđ</td>
                                                                    @php
                                                                        $total += $productInBill->quantity * $productInBill->product_price;
                                                                    @endphp
                                                                    <td>{{ $productInBill->quantity * $productInBill->product_price }}
                                                                        vnđ</td>

                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->

                                        <div style="color: white; padding-top: 30px;">
                                            Tổng thành tiên: {{ $total }}
                                        </div>

                                    </div>

                                    <div class="invoice-footer">
                                        Thank you for your Business.
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
