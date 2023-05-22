<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="customer/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="customer/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="customer/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/style.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a class="logo" href="{{ route('home') }}">NDMHPteam</a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            {{-- Mobile --}}
            {{-- Chưa đăng nhập --}}
            <div class="header__top__right__auth">
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
            {{-- Đã đăng nhập --}}
            <div class="header__top__right__language">
                <i class="fa fa-user"></i>
                <div>
                    Tên tài khoản                                    
                </div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="information.php">Thông tin</a></li>
                    <li><a href="information.php">Đổi mật khẩu</a></li>
                    <li><a href="logout.php">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="{{ route('shop') }}">Cửa hàng</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ route('detail') }}">Chi tiết sản phẩm</a></li>
                        <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                        <li><a href="{{ route('checkout') }}">Thủ tục thanh toán</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                <li><a href="{{ route('admin.product-management') }}">Quản lí</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            {{-- PC --}}
                            {{-- Khi chưa đăng nhập thì hiển thị --}}
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
                            </div>
                            {{-- Khi đăng nhập thì hiển thị --}}
                            <div class="header__top__right__language">
                                <i class="fa fa-user"></i>
                                <div>
                                    Tên tài khoản                                    
                                </div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="{{ route('form-profile') }}">Thông tin</a></li>
                                    <li><a href="{{ route('change-password') }}">Đổi mật khẩu</a></li>
                                    <li><a href="logout.php">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a class="logo" href="{{ route('home') }}">NDMHPteam</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li><a href="{{ route('shop') }}">Cửa hàng</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('detail') }}">Chi tiết sản phẩm</a></li>
                                    <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                                    <li><a href="{{ route('checkout') }}">Thủ tục thanh toán</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                            <li><a href="{{ route('admin.product-management') }}">Quản lí</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('like') }}"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả danh mục</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#" method="GET">
                                <input type="text" placeholder="Bạn cần tìm gì gì?">
                                <button type="submit" class="site-btn">Tìm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__text">
                                <h5>0123456789</h5>
                                <span>Hỗ chợ 24/7 thời gian</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    @yield('content')
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a class="logo" href="{{ route('home') }}">NDMHPteam</a>
                        </div>
                        <ul>
                            <li>Địa chỉ: 60-49 Road 11378 New York</li>
                            <li>Số điện thoại: 0123456789</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                NDMHPteam - Uy tín
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="customer/js/jquery-3.3.1.min.js"></script>
    <script src="customer/js/bootstrap.min.js"></script>
    <script src="customer/js/jquery.nice-select.min.js"></script>
    <script src="customer/js/jquery-ui.min.js"></script>
    <script src="customer/js/jquery.slicknav.js"></script>
    <script src="customer/js/mixitup.min.js"></script>
    <script src="customer/js/owl.carousel.min.js"></script>
    <script src="customer/js/main.js"></script>


</body>

</html>
