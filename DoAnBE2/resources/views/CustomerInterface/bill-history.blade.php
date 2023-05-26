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
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">


                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            Bootdey.com
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <address class="text-right">
                                            Maxwell admin Inc, 45 NorthWest Street.<br>
                                            Sunrise Blvd, San Francisco.<br>
                                            00000 00000
                                        </address>
                                    </div>
                                </div>
                                <!-- Row end -->

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                Alex Maxwell<br>
                                                150-600 Church Street, Florida, USA
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice - #009</div>
                                                <div>January 10th 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-body">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Wordpress Template
                                                            <p class="m-0 text-muted">
                                                                Reference site about Lorem Ipsum, giving information on
                                                                its
                                                                origins.
                                                            </p>
                                                        </td>
                                                        <td>#50000981</td>
                                                        <td>9</td>
                                                        <td>$5000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Maxwell Admin Template
                                                            <p class="m-0 text-muted">
                                                                As well as a random Lipsum generator.
                                                            </p>
                                                        </td>
                                                        <td>#50000126</td>
                                                        <td>5</td>
                                                        <td>$100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Unify Admin Template
                                                            <p class="m-0 text-muted">
                                                                Lorem ipsum has become the industry standard.
                                                            </p>
                                                        </td>
                                                        <td>#50000821</td>
                                                        <td>6</td>
                                                        <td>$49.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                                Tax<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                $5000.00<br>
                                                                $100.00<br>
                                                                $49.00<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>$5150.99</strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">


                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            Bootdey.com
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <address class="text-right">
                                            Maxwell admin Inc, 45 NorthWest Street.<br>
                                            Sunrise Blvd, San Francisco.<br>
                                            00000 00000
                                        </address>
                                    </div>
                                </div>
                                <!-- Row end -->

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                Alex Maxwell<br>
                                                150-600 Church Street, Florida, USA
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice - #009</div>
                                                <div>January 10th 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-body">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Wordpress Template
                                                            <p class="m-0 text-muted">
                                                                Reference site about Lorem Ipsum, giving information on
                                                                its
                                                                origins.
                                                            </p>
                                                        </td>
                                                        <td>#50000981</td>
                                                        <td>9</td>
                                                        <td>$5000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Maxwell Admin Template
                                                            <p class="m-0 text-muted">
                                                                As well as a random Lipsum generator.
                                                            </p>
                                                        </td>
                                                        <td>#50000126</td>
                                                        <td>5</td>
                                                        <td>$100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Unify Admin Template
                                                            <p class="m-0 text-muted">
                                                                Lorem ipsum has become the industry standard.
                                                            </p>
                                                        </td>
                                                        <td>#50000821</td>
                                                        <td>6</td>
                                                        <td>$49.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                                Tax<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                $5000.00<br>
                                                                $100.00<br>
                                                                $49.00<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>$5150.99</strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">


                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            Bootdey.com
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <address class="text-right">
                                            Maxwell admin Inc, 45 NorthWest Street.<br>
                                            Sunrise Blvd, San Francisco.<br>
                                            00000 00000
                                        </address>
                                    </div>
                                </div>
                                <!-- Row end -->

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                Alex Maxwell<br>
                                                150-600 Church Street, Florida, USA
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice - #009</div>
                                                <div>January 10th 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-body">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Wordpress Template
                                                            <p class="m-0 text-muted">
                                                                Reference site about Lorem Ipsum, giving information on
                                                                its
                                                                origins.
                                                            </p>
                                                        </td>
                                                        <td>#50000981</td>
                                                        <td>9</td>
                                                        <td>$5000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Maxwell Admin Template
                                                            <p class="m-0 text-muted">
                                                                As well as a random Lipsum generator.
                                                            </p>
                                                        </td>
                                                        <td>#50000126</td>
                                                        <td>5</td>
                                                        <td>$100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Unify Admin Template
                                                            <p class="m-0 text-muted">
                                                                Lorem ipsum has become the industry standard.
                                                            </p>
                                                        </td>
                                                        <td>#50000821</td>
                                                        <td>6</td>
                                                        <td>$49.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                                Tax<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                $5000.00<br>
                                                                $100.00<br>
                                                                $49.00<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>$5150.99</strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
