<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Vegist - Multipurpose eCommerce HTML Template</title>
        <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
        <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
        <meta name="author" content="spacingtech_webify">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="{{asset('image/fevicon.png')}}')}}">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style3.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive3.css')}}">
    </head>
    <body>
        <!-- top notification bar start -->
        <section class="top-3">
            <div class="container">
                <div class="row ">
                    <div class="col">
                        <ul class="top-home">
                            <li class="top-home-li t-content">
                                <!-- offer text start -->
                                <div class="top-content">
                                    <p class="top-slogn"><span class="top-c">free shipping</span> orders from all item</p>
                                </div>
                                <!-- offer text end -->
                            </li>
                            <li class="top-home-li">
                                <ul class="top-dropdown">
                                    <li class="top-dropdown-li notification-title">
                                        <a href="about-us.html">About us</a>
                                    </li>
                                    <li class="top-dropdown-li notification-title">
                                        <a href="contact.html">Contact us</a>
                                    </li>
                                    <!-- login start -->
                                    <li class="top-dropdown-li">
                                        <a href="javascript:void(0)">Account</a>
                                        <i class="ion-ios-arrow-down"></i>
                                        <ul class="account">
                                            <li><a href="register.html">register / log in</a></li>
                                            <li><a href="checkout-3.html">checkout</a></li>
                                            <li><a href="wishlist.html">my wishlist</a></li>
                                            <li><a href="order-complete.html">order history</a></li>
                                            <li><a href="cart-3.html">my cart</a></li>
                                        </ul>
                                    </li>
                                    <!-- login end -->
                                    <!-- currency start -->
                                    <li class="top-dropdown-li">
                                        <a href="javascript:void(0)">Cad</a>
                                        <i class="ion-ios-arrow-down"></i>
                                        <ul class="currency">
                                            <li><a href="javascript:void(0)">AFN</a></li>
                                            <li><a href="javascript:void(0)">BDT</a></li>
                                            <li><a href="javascript:void(0)">CAD</a></li>
                                            <li><a href="javascript:void(0)">EUR</a></li>
                                            <li><a href="javascript:void(0)">GBP</a></li>
                                        </ul>
                                    </li>
                                    <!-- currency end -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- top notification bar start -->
        <!-- header start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="index3.html">
                                        <img src="{{asset('image/logo2.png')}}" alt="logo-image" class="img-fluid">
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- search start -->
                                <div class="header-element header-search">
                                    <form>
                                        <input type="text" name="search" placeholder="Search Product.">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <!-- search end -->
                                <!-- header icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                            <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap search-wrap">
                                            <!-- mobile search start -->
                                            <div class="search-rap">
                                                <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                            </div>
                                            <!-- mobile search start -->
                                        </li>
                                        <li class="side-wrap wishlist-wrap">
                                            <a href="wishlist.html" class="header-wishlist">
                                                <span class="wishlist-icon"><i class="icon-heart"></i></span>
                                                <span class="wishlist-counter">0</span>
                                            </a>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="javascript:void(0)" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                            <span id="cart-total" class="bigcounter">5</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header icon end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu start  -->
                <section class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top-menu">
                                    <!-- vega menu start -->
                                    <div class="vegamenu-content">
                                        <a href="#vega-menu" data-bs-toggle="collapse" class="vegamenu-title">
                                            <span class="menu-icon"><i class="ion-navicon"></i></span>
                                            <span class="menu-cat-title">Browse category</span>
                                            <span class="menu-down-icon"><i class="ion-ios-arrow-down"></i></span>
                                        </a>
                                        <div class="vegamenu-head">
                                            <div class="main-wrap collapse" id="vega-menu">
                                                <ul class="vega-menu">
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image01.jpg')}}" alt="menu-image">
                                                            <span>Fresh fruits</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image02.jpg')}}" alt="menu-image">
                                                            <span>Fresh meat</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image03.jpg')}}" alt="menu-image">
                                                            <span>Fresh vegetable</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image04.jpg')}}" alt="menu-image">
                                                            <span>Green Searfood</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image05.jpg')}}" alt="manu-image">
                                                            <span>Organic dryfruit</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image06.jpg')}}" alt="manu-image">
                                                            <span>Blackberry 100%organic</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image07.jpg')}}" alt="manu-image">
                                                            <span>Organic juice</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image08.jpg')}}" alt="manu-image">
                                                            <span>Sea & fresh</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image01.jpg')}}" alt="manu-image">
                                                            <span>Summer fruit</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image09.jpg')}}" alt="manu-image">
                                                            <span>Baker's rack</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image10.jpg')}}" alt="manu-image">
                                                            <span>Dairy & chesse</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="product-style-3.html" class="link-title">
                                                            <img src="{{asset('image/menu-img/image11.jpg')}}" alt="manu-image">
                                                            <span>Organic wine</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- vega menu end -->
                                    <!-- megamenu start -->
                                    <div class="header-element megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
                                                        <li class="submenu-li">
                                                            <a href="index1.html" class="submenu-link">Vegist home 01</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="../vegist-rtl/index1.html" class="submenu-link">Vegist home 01 (RTL)</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="../vegist-box/index1.html" class="submenu-link">Vegist home 01 (BOX)</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index2.html" class="submenu-link">Vegist home 02</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index3.html" class="submenu-link">Vegist home 03</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index4.html" class="submenu-link">Vegist home 04</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index5.html" class="submenu-link">Vegist home 05</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index6.html" class="submenu-link">Vegist home 06</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index7.html" class="submenu-link">Vegist home 07</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index8.html" class="submenu-link">Vegist home 08</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index9.html" class="submenu-link">Vegist home 09</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index10.html" class="submenu-link">Vegist home 10</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index11.html" class="submenu-link">Vegist home 11</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index12.html" class="submenu-link">Vegist home 12</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index13.html" class="submenu-link">Vegist home 13</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu mega-menu collapse" id="collapse-top-mega-menu">
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Fresh food</h2>
                                                            <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Fresh food</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-sub-mega-menu">
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fruit & nut</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Snack food</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Non-dairy</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Mayonnaise</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Mixedfruits</h2>
                                                            <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Mixedfruits</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-fruits-menu">
                                                                <li class="supmenu-li"><a href="product-style-6.html">Oranges</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Coffee creamers</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Ghee beverages</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Ranch salad</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Hemp milk</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Nuts & seeds</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Bananas & plantains</h2>
                                                            <a href="#collapse-top-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Bananas & plantains</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-banana-menu">
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fresh gala</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fresh berries</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fruit & nut</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fifts mixed fruits</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Oranges</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Oranges</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Apples berries</h2>
                                                            <a href="#collapse-top-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Apples berries</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-top-apple-menu">
                                                                <li class="supmenu-li"><a href="product-style-6.html">Pears produce</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Bananas</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Natural grassbeab</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fresh green orange</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Fresh organic reachter</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Balckberry 100%organic</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu banner-menu collapse" id="collapse-top-banner-menu">
                                                        <li class="menu-banner">
                                                            <a href="grid-list.html" class="menu-banner-img"><img src="{{asset('image/menu-banner01.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="grid-list.html" class="menu-banner-img"><img src="{{asset('image/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="grid-list.html" class="menu-banner-img"><img src="{{asset('image/menu-banner03.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                            <a href="grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Pages</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Pages</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-page-menu">
                                                        <li class="submenu-li">
                                                            <a href="about-us.html" class="submenu-link">About us</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                            <a href="#account-menu" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                            <ul class="collapse blog-style-1" id="account-menu">
                                                                <li>
                                                                    <a href="order-history.html" class="sub-style"><span>Order</span></a>
                                                                    <a href="order-history.html" class="blog-sub-style"><span>Order</span></a>
                                                                    <a href="profile.html" class="sub-style"><span>Profile</span></a>
                                                                    <a href="profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                                    <a href="pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                                    <a href="pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                                    <a href="pro-wishlist.html" class="sub-style"><span>Wishlist</span></a>
                                                                    <a href="pro-wishlist.html" class="blog-sub-style"><span>Wishlist</span></a>
                                                                    <a href="pro-tickets.html" class="sub-style"><span>My tickets</span></a>
                                                                    <a href="pro-tickets.html" class="blog-sub-style"><span>My tickets</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="billing-info.html" class="submenu-link">Billing info</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="cancellation.html" class="submenu-link">Cancellation</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="cart.html" class="submenu-link">Cart page</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="coming-soon.html" class="submenu-link">Coming-soon</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="faq's.html" class="submenu-link">Faq's</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="forgot-password.html" class="submenu-link">Forgot passowrd</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="order-complete.html" class="submenu-link">Order complete</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="tracking.html" class="submenu-link">Track page</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="contact.html" class="submenu-link">Contact us</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="payment-policy.html" class="submenu-link">Payment policy</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="privacy-policy.html" class="submenu-link">privacy policy</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="return-policy.html" class="submenu-link">Return policy</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="terms-conditions.html" class="submenu-link">Terms & conditions</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="wishlist.html" class="submenu-link">Wishlist</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="sitemap.html" class="submenu-link">Sitemap</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="fnf-page.html" class="submenu-link">4 not 4</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Blogs</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#blog-style" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Blogs</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="blog-style">
                                                        <li class="submenu-li">
                                                            <a href="javascript:void(0)" class="g-l-link"><span>Blog grid</span> <i class="fa fa-angle-right"></i></a>
                                                            <a href="#blog-style03" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                            <ul class="collapse blog-style-1" id="blog-style03">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#grid1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="grid1">
                                                                        <li><a href="blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                                        <li><a href="blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                                        <li><a href="blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#grid2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="grid2">
                                                                        <li><a href="blog-style-2-3-grid.html">Blog 3 grid</a></li>
                                                                        <li><a href="blog-style-2-left-3-grid.html">Left blog 3 grid</a></li>
                                                                        <li><a href="blog-style-2-right-3-grid.html">Right blog 3 grid</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#grid3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="grid3">
                                                                        <li><a href="blog-style-3-grid.html">Blog 3 grid</a></li>
                                                                        <li><a href="blog-style-3-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                        <li><a href="blog-style-3-right-grid-blog.html">Right blog 3 grid</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#grid4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="grid4">
                                                                        <li><a href="blog-style-5-3-grid.html">Blog 3 grid</a></li>
                                                                        <li><a href="blog-style-5-left-3-grid.html">Left blog 3 grid</a></li>
                                                                        <li><a href="blog-style-5-right-3-grid.html">Right blog 3 grid</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#grid5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="grid5">
                                                                        <li><a href="blog-style-6-3-grid.html">Blog 3 grid</a></li>
                                                                        <li><a href="blog-style-6-left-3-grid.html">Left blog 3 grid</a></li>
                                                                        <li><a href="blog-style-6-right-3-grid.html">Right blog 3 grid</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#grid6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="grid6">
                                                                        <li><a href="blog-style-7-3-grid.html">Blog 3 grid</a></li>
                                                                        <li><a href="blog-style-7-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                        <li><a href="blog-style-7-right-grid-blog.html">Right blog 3 grid</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="javascript:void(0)" class="g-l-link"><span>Blog list</span> <i class="fa fa-angle-right"></i></a>
                                                            <a href="#blog-style01" data-bs-toggle="collapse" class="sub-link"><span>Blog list</span> <i class="fa fa-angle-down"></i></a>
                                                            <ul class="collapse blog-style-1" id="blog-style01">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-1">
                                                                        <li><a href="blog-style-1-list.html">Blog list</a></li>
                                                                        <li><a href="blog-style-1-left-list.html">Left blog list</a></li>
                                                                        <li><a href="blog-style-1-right-list.html">Right blog list</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-22" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-22">
                                                                        <li><a href="blog-style-2-list.html">Blog list</a></li>
                                                                        <li><a href="blog-style-2-left-list.html">Left blog list</a></li>
                                                                        <li><a href="blog-style-2-right-list.html">Right blog list</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-33" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-33">
                                                                        <li><a href="blog-style-3-list.html">Blog list</a></li>
                                                                        <li><a href="blog-style-3-left-list-blog.html">Left blog list</a></li>
                                                                        <li><a href="blog-style-3-right-list-blog.html">Right blog list</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-44" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-44">
                                                                        <li><a href="blog-style-5-list-blog.html">Blog list</a></li>
                                                                        <li><a href="blog-style-5-left-list.html">Left blog list</a></li>
                                                                        <li><a href="blog-style-5-right-list.html">Right blog list</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-55" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-55">
                                                                        <li><a href="blog-style-6-list-blog.html">Blog list</a></li>
                                                                        <li><a href="blog-style-6-left-list-blog.html">Left blog list</a></li>
                                                                        <li><a href="blog-style-6-right-list-blog.html">Right blog list</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-66" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-66">
                                                                        <li><a href="blog-style-7-list-blog.html">Blog list</a></li><!--list-->
                                                                        <li><a href="blog-style-7-left-list-blog.html">Left blog list</a></li><!--list-->
                                                                        <li><a href="blog-style-7-right-list-blog.html">Right blog list</a></li><!--list-->
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="javascript:void(0)" class="g-l-link"><span>Blog details</span> <i class="fa fa-angle-right"></i></a>
                                                            <a href="#blog-style02" data-bs-toggle="collapse" class="sub-link"><span>Blog Details</span> <i class="fa fa-angle-down"></i></a>
                                                            <ul class="collapse blog-style-1 ex-width" id="blog-style02">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list-11" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list-11">
                                                                        <li><a href="blog-style-1-details.html">Blog details</a></li>
                                                                        <li><a href="blog-style-1-left-details.html">Left blog details</a></li>
                                                                        <li><a href="blog-style-1-right-details.html">Right blog details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list2">
                                                                        <li><a href="blog-style-2-details.html">Blog details</a></li>
                                                                        <li><a href="blog-style-2-left-details.html">Left blog details</a></li>
                                                                        <li><a href="blog-style-2-right-details.html">Right blog details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list3">
                                                                        <li><a href="blog-style-3-details.html">Blog details</a></li>
                                                                        <li><a href="blog-style-3-left-blog-details.html">Left blog details</a></li>
                                                                        <li><a href="blog-style-3-right-blog-details.html">Right blog details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list4">
                                                                        <li><a href="blog-style-5-details.html">Blog details</a></li>
                                                                        <li><a href="blog-style-5-left-details.html">Left blog details</a></li>
                                                                        <li><a href="blog-style-5-right-details.html">Right blog details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list5">
                                                                        <li><a href="blog-style-6-details.html">Blog details</a></li>
                                                                        <li><a href="blog-style-6-left-details-blog.html">Left blog details</a></li>
                                                                        <li><a href="blog-style-6-right-details-blog.html">Right blog details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                                    <a href="#list6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                                    <ul class="grid-style collapse" id="list6">
                                                                        <li><a href="blog-style-7-details.html">Blog details</a></li>
                                                                        <li><a href="blog-style-7-left-details.html">Left blog details</a></li>
                                                                        <li><a href="blog-style-7-right-details.html">Right blog details</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="javascript:void(0)" class="g-l-link"><span>Center blog</span> <i class="fa fa-angle-right"></i></a>
                                                            <a href="#center-blog" data-bs-toggle="collapse" class="sub-link"><span>Center blog</span> <i class="fa fa-angle-down"></i></a>
                                                            <ul class="collapse blog-style-1" id="center-blog">
                                                                <li>
                                                                    <a href="blog-style-1-center-blog.html" class="sub-style"><span>Blog style 1</span></a>
                                                                    <a href="blog-style-1-center-blog.html" class="blog-sub-style"><span>Blog style 1</span></a>
                                                                    <a href="blog-style-2-center-blog.html" class="sub-style"><span>Blog style 2</span></a>
                                                                    <a href="blog-style-2-center-blog.html" class="blog-sub-style"><span>Blog style 2</span></a>
                                                                    <a href="blog-style-3-center-blog.html" class="sub-style"><span>Blog style 3</span></a>
                                                                    <a href="blog-style-3-center-blog.html" class="blog-sub-style"><span>Blog style 3</span></a>
                                                                    <a href="blog-style-5-center-blog.html" class="sub-style"><span>Blog style 4</span></a>
                                                                    <a href="blog-style-5-center-blog.html" class="blog-sub-style"><span>Blog style 4</span></a>
                                                                    <a href="blog-style-6-center-blog.html" class="sub-style"><span>Blog style 5</span></a>
                                                                    <a href="blog-style-6-center-blog.html" class="blog-sub-style"><span>Blog style 5</span></a>
                                                                    <a href="blog-style-7-center-blog.html" class="sub-style"><span>Blog style 6</span></a>
                                                                    <a href="blog-style-7-center-blog.html" class="blog-sub-style"><span>Blog style 6</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Feature</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#feature1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Feature</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu mega-menu collapse" id="feature1">
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Header style</h2>
                                                            <a href="#feature01" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Header style</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="feature01">
                                                                <li class="supmenu-li"><a href="header-style-1.html">Header style 1</a></li>
                                                                <li class="supmenu-li"><a href="header-style-2.html">Header style 2</a></li>
                                                                <li class="supmenu-li"><a href="header-style-3.html">Header style 3</a></li>
                                                                <li class="supmenu-li"><a href="header-style-4.html">Header style 4</a></li>
                                                                <li class="supmenu-li"><a href="header-style-5.html">Header style 5</a></li>
                                                                <li class="supmenu-li"><a href="header-style-6.html">Header style 6</a></li>
                                                                <li class="supmenu-li"><a href="header-style-7.html">Header style 7</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Footer style</h2>
                                                            <a href="#feature02" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Footer style</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="feature02">
                                                                <li class="supmenu-li"><a href="footer-style-1.html">Footer style 1</a></li>
                                                                <li class="supmenu-li"><a href="footer-style-2.html">Footer style 2</a></li>
                                                                <li class="supmenu-li"><a href="footer-style-3.html">Footer style 3</a></li>
                                                                <li class="supmenu-li"><a href="footer-style-4.html">Footer style 4</a></li>
                                                                <li class="supmenu-li"><a href="footer-style-5.html">Footer style 5</a></li>
                                                                <li class="supmenu-li"><a href="footer-style-6.html">Footer style 6</a></li>
                                                                <li class="supmenu-li"><a href="footer-style-7.html">Footer style 7</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Product details</h2>
                                                            <a href="#feature03" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Product details</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="feature03">
                                                                <li class="supmenu-li"><a href="product.html">Product details style 1</a></li>
                                                                <li class="supmenu-li"><a href="product-style-2.html">Product details style 2</a></li>
                                                                <li class="supmenu-li"><a href="product-style-3.html">Product details style 3</a></li>
                                                                <li class="supmenu-li"><a href="product-style-4.html">Product details style 4</a></li>
                                                                <li class="supmenu-li"><a href="product-style-5.html">Product details style 5</a></li>
                                                                <li class="supmenu-li"><a href="product-style-6.html">Product details style 6</a></li>
                                                                <li class="supmenu-li"><a href="product-style-7.html">Product details style 7</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="megamenu-li parent">
                                                            <h2 class="sublink-title">Other style</h2>
                                                            <a href="#feature04" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                <span>Other style</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="feature04">
                                                                <li class="supmenu-li"><a href="checkout-1.html">Checkout style 1</a></li>
                                                                <li class="supmenu-li"><a href="checkout-2.html">Checkout style 2</a></li>
                                                                <li class="supmenu-li"><a href="checkout-3.html">Checkout style 3</a></li>
                                                                <li class="supmenu-li"><a href="cart.html">Cart style 1</a></li>
                                                                <li class="supmenu-li"><a href="cart-2.html">Cart style 2</a></li>
                                                                <li class="supmenu-li"><a href="cart-3.html">Cart style 3</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Buy vegist <span class="hot">Hot</span></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- megamenu end -->
                                    <!-- hotline start -->
                                    <div class="hotline">
                                        <a href="javascript:void(0)"><img src="{{asset('image/hot-image.png')}}" class="img-fluid" alt="image-icon"></a>
                                        <div class="image-content">
                                            <span class="hot-l">Hotline:</span>
                                            <span>0123 456 789</span>
                                        </div>
                                    </div>
                                    <!-- hotline end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- menu end -->
            </div>
            <!-- mobile menu start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                    </div>
                                    <div class="navbar-collapse" id="navbarContent">
                                        <!-- main-menu start -->
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Home</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Home</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-home">
                                                            <li class="submenu-li">
                                                                <a href="index1.html" class="submenu-link">Vegist home 01</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="../vegist-rtl/index1.html" class="submenu-link">Vegist home 01 (RTL)</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="../vegist-box/index1.html" class="submenu-link">Vegist home 01 (BOX)</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index2.html" class="submenu-link">Vegist home 02</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index3.html" class="submenu-link">Vegist home 03</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index4.html" class="submenu-link">Vegist home 04</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index5.html" class="submenu-link">Vegist home 05</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index6.html" class="submenu-link">Vegist home 06</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index7.html" class="submenu-link">Vegist home 07</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index8.html" class="submenu-link">Vegist home 08</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index9.html" class="submenu-link">Vegist home 09</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index10.html" class="submenu-link">Vegist home 10</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index11.html" class="submenu-link">Vegist home 11</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index12.html" class="submenu-link">Vegist home 12</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="index13.html" class="submenu-link">Vegist home 13</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Shop</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Shop</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Fresh food</h2>
                                                                <a href="#collapse-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Fresh food</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fruit & nut</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Snack food</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Organics nut gifts</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Non-dairy</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Mayonnaise</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Milk almond</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu">
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Oranges</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Coffee creamers</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Ghee beverages</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Ranch salad</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Hemp milk</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Nuts & seeds</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Bananas & plantains</h2>
                                                                <a href="#collapse-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-banana-menu">
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fresh gala</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fresh berries</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fruit & nut</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fifts mixed fruits</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Oranges</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Oranges</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="collapse-apple-menu">
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Pears produce</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Bananas</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Natural grassbeab</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fresh green orange</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Fresh organic reachter</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Balckberry 100%organic</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Collection</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Collection</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu">
                                                            <li class="menu-banner">
                                                                <a href="grid-list.html" class="menu-banner-img"><img src="{{asset('image/menu-banner01.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                                <a href="grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="grid-list.html" class="menu-banner-img"><img src="{{asset('image/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                                <a href="grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="grid-list.html" class="menu-banner-img"><img src="{{asset('image/menu-banner03.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                                <a href="grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Pages</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Pages</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                            <li class="submenu-li">
                                                                <a href="about-us.html" class="submenu-link">About us</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                                <a href="#account-menu01" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1" id="account-menu01">
                                                                    <li>
                                                                        <a href="order-history.html" class="sub-style"><span>Order</span></a>
                                                                        <a href="order-history.html" class="blog-sub-style"><span>Order</span></a>
                                                                        <a href="profile.html" class="sub-style"><span>Profile</span></a>
                                                                        <a href="profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                                        <a href="pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                                        <a href="pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                                        <a href="pro-wishlist.html" class="sub-style"><span>Wishlist</span></a>
                                                                        <a href="pro-wishlist.html" class="blog-sub-style"><span>Wishlist</span></a>
                                                                        <a href="pro-tickets.html" class="sub-style"><span>My tickets</span></a>
                                                                        <a href="pro-tickets.html" class="blog-sub-style"><span>My tickets</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="billing-info.html" class="submenu-link">Billing info</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="cancellation.html" class="submenu-link">Cancellation</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="cart.html" class="submenu-link">Cart page</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="coming-soon.html" class="submenu-link">Coming-soon</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="faq's.html" class="submenu-link">Faq's</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="forgot-password.html" class="submenu-link">Forgot passowrd</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="order-complete.html" class="submenu-link">Order complete</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="tracking.html" class="submenu-link">Track page</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="contact.html" class="submenu-link">Contact us</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="payment-policy.html" class="submenu-link">Payment policy</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="privacy-policy.html" class="submenu-link">privacy policy</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="return-policy.html" class="submenu-link">Return policy</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="terms-conditions.html" class="submenu-link">Terms & conditions</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="wishlist.html" class="submenu-link">Wishlist</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="sitemap.html" class="submenu-link">Sitemap</a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="fnf-page.html" class="submenu-link">4 not 4</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Blogs</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#blog-grid-style01" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Blogs</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="blog-grid-style01">
                                                            <li class="submenu-li">
                                                                <a href="javascript:void(0)" class="g-l-link"><span>Blog grid</span> <i class="fa fa-angle-right"></i></a>
                                                                <a href="#blog-style-03" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1" id="blog-style-03">
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#grid-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="grid-1">
                                                                            <li><a href="blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                                            <li><a href="blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                                            <li><a href="blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#grid-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="grid-2">
                                                                            <li><a href="blog-style-2-3-grid.html">Blog 3 grid</a></li>
                                                                            <li><a href="blog-style-2-left-3-grid.html">Left blog 3 grid</a></li>
                                                                            <li><a href="blog-style-2-right-3-grid.html">Right blog 3 grid</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#grid-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="grid-3">
                                                                            <li><a href="blog-style-3-grid.html">Blog 3 grid</a></li>
                                                                            <li><a href="blog-style-3-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                            <li><a href="blog-style-3-right-grid-blog.html">Right blog 3 grid</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#grid-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="grid-4">
                                                                            <li><a href="blog-style-5-3-grid.html">Blog 3 grid</a></li>
                                                                            <li><a href="blog-style-5-left-3-grid.html">Left blog 3 grid</a></li>
                                                                            <li><a href="blog-style-5-right-3-grid.html">Right blog 3 grid</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#grid-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="grid-5">
                                                                            <li><a href="blog-style-6-3-grid.html">Blog 3 grid</a></li>
                                                                            <li><a href="blog-style-6-left-3-grid.html">Left blog 3 grid</a></li>
                                                                            <li><a href="blog-style-6-right-3-grid.html">Right blog 3 grid</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#grid-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="grid-6">
                                                                            <li><a href="blog-style-7-3-grid.html">Blog 3 grid</a></li>
                                                                            <li><a href="blog-style-7-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                            <li><a href="blog-style-7-right-grid-blog.html">Right blog 3 grid</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="javascript:void(0)" class="g-l-link"><span>Blog list</span> <i class="fa fa-angle-right"></i></a>
                                                                <a href="#blog-list-style" data-bs-toggle="collapse" class="sub-link"><span>Blog list</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1" id="blog-list-style">
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-list-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-list-1">
                                                                            <li><a href="blog-style-1-list.html">Blog list</a></li>
                                                                            <li><a href="blog-style-1-left-list.html">Left blog list</a></li>
                                                                            <li><a href="blog-style-1-right-list.html">Right blog list</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-list-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-list-2">
                                                                            <li><a href="blog-style-2-list.html">Blog list</a></li>
                                                                            <li><a href="blog-style-2-left-list.html">Left blog list</a></li>
                                                                            <li><a href="blog-style-2-right-list.html">Right blog list</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-list-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-list-3">
                                                                            <li><a href="blog-style-3-list.html">Blog list</a></li>
                                                                            <li><a href="blog-style-3-left-list-blog.html">Left blog list</a></li>
                                                                            <li><a href="blog-style-3-right-list-blog.html">Right blog list</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-list-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-list-4">
                                                                            <li><a href="blog-style-5-list-blog.html">Blog list</a></li>
                                                                            <li><a href="blog-style-5-left-list.html">Left blog list</a></li>
                                                                            <li><a href="blog-style-5-right-list.html">Right blog list</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-list-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-list-5">
                                                                            <li><a href="blog-style-6-list-blog.html">Blog list</a></li>
                                                                            <li><a href="blog-style-6-left-list-blog.html">Left blog list</a></li>
                                                                            <li><a href="blog-style-6-right-list-blog.html">Right blog list</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-list-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-list-6">
                                                                            <li><a href="blog-style-7-list-blog.html">Blog list</a></li><!--list-->
                                                                            <li><a href="blog-style-7-left-list-blog.html">Left blog list</a></li><!--list-->
                                                                            <li><a href="blog-style-7-right-list-blog.html">Right blog list</a></li><!--list-->
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="javascript:void(0)" class="g-l-link"><span>Blog details</span> <i class="fa fa-angle-right"></i></a>
                                                                <a href="#blog-details-style" data-bs-toggle="collapse" class="sub-link"><span>Blog Details</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1 ex-width" id="blog-details-style">
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-details-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-details-1">
                                                                            <li><a href="blog-style-1-details.html">Blog details</a></li>
                                                                            <li><a href="blog-style-1-left-details.html">Left blog details</a></li>
                                                                            <li><a href="blog-style-1-right-details.html">Right blog details</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-details-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-details-2">
                                                                            <li><a href="blog-style-2-details.html">Blog details</a></li>
                                                                            <li><a href="blog-style-2-left-details.html">Left blog details</a></li>
                                                                            <li><a href="blog-style-2-right-details.html">Right blog details</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-details-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-details-3">
                                                                            <li><a href="blog-style-3-details.html">Blog details</a></li>
                                                                            <li><a href="blog-style-3-left-blog-details.html">Left blog details</a></li>
                                                                            <li><a href="blog-style-3-right-blog-details.html">Right blog details</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-details-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-details-4">
                                                                            <li><a href="blog-style-5-details.html">Blog details</a></li>
                                                                            <li><a href="blog-style-5-left-details.html">Left blog details</a></li>
                                                                            <li><a href="blog-style-5-right-details.html">Right blog details</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-details-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-details-5">
                                                                            <li><a href="blog-style-6-details.html">Blog details</a></li>
                                                                            <li><a href="blog-style-6-left-details-blog.html">Left blog details</a></li>
                                                                            <li><a href="blog-style-6-right-details-blog.html">Right blog details</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="#blog-details-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                                        <ul class="grid-style collapse" id="blog-details-6">
                                                                            <li><a href="blog-style-7-details.html">Blog details</a></li>
                                                                            <li><a href="blog-style-7-left-details.html">Left blog details</a></li>
                                                                            <li><a href="blog-style-7-right-details.html">Right blog details</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="javascript:void(0)" class="g-l-link"><span>Center blog</span> <i class="fa fa-angle-right"></i></a>
                                                                <a href="#center-b" data-bs-toggle="collapse" class="sub-link"><span>Center blog</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1" id="center-b">
                                                                    <li>
                                                                        <a href="blog-style-1-center-blog.html" class="sub-style"><span>Blog style 1</span></a>
                                                                        <a href="blog-style-1-center-blog.html" class="blog-sub-style"><span>Blog style 1</span></a>
                                                                        <a href="blog-style-2-center-blog.html" class="sub-style"><span>Blog style 2</span></a>
                                                                        <a href="blog-style-2-center-blog.html" class="blog-sub-style"><span>Blog style 2</span></a>
                                                                        <a href="blog-style-3-center-blog.html" class="sub-style"><span>Blog style 3</span></a>
                                                                        <a href="blog-style-3-center-blog.html" class="blog-sub-style"><span>Blog style 3</span></a>
                                                                        <a href="blog-style-5-center-blog.html" class="sub-style"><span>Blog style 4</span></a>
                                                                        <a href="blog-style-5-center-blog.html" class="blog-sub-style"><span>Blog style 4</span></a>
                                                                        <a href="blog-style-6-center-blog.html" class="sub-style"><span>Blog style 5</span></a>
                                                                        <a href="blog-style-6-center-blog.html" class="blog-sub-style"><span>Blog style 5</span></a>
                                                                        <a href="blog-style-7-center-blog.html" class="sub-style"><span>Blog style 6</span></a>
                                                                        <a href="blog-style-7-center-blog.html" class="blog-sub-style"><span>Blog style 6</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Feature</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#feature10" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Feature</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse" id="feature10">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Header style</h2>
                                                                <a href="#feature08" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Header style</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="feature08">
                                                                    <li class="supmenu-li"><a href="header-style-1.html">Header style 1</a></li>
                                                                    <li class="supmenu-li"><a href="header-style-2.html">Header style 2</a></li>
                                                                    <li class="supmenu-li"><a href="header-style-3.html">Header style 3</a></li>
                                                                    <li class="supmenu-li"><a href="header-style-4.html">Header style 4</a></li>
                                                                    <li class="supmenu-li"><a href="header-style-5.html">Header style 5</a></li>
                                                                    <li class="supmenu-li"><a href="header-style-6.html">Header style 6</a></li>
                                                                    <li class="supmenu-li"><a href="header-style-7.html">Header style 7</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Footer style</h2>
                                                                <a href="#feature07" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Footer style</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="feature07">
                                                                    <li class="supmenu-li"><a href="footer-style-1.html">Footer style 1</a></li>
                                                                    <li class="supmenu-li"><a href="footer-style-2.html">Footer style 2</a></li>
                                                                    <li class="supmenu-li"><a href="footer-style-3.html">Footer style 3</a></li>
                                                                    <li class="supmenu-li"><a href="footer-style-4.html">Footer style 4</a></li>
                                                                    <li class="supmenu-li"><a href="footer-style-5.html">Footer style 5</a></li>
                                                                    <li class="supmenu-li"><a href="footer-style-6.html">Footer style 6</a></li>
                                                                    <li class="supmenu-li"><a href="footer-style-7.html">Footer style 7</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Product details</h2>
                                                                <a href="#feature06" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Product details</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="feature06">
                                                                    <li class="supmenu-li"><a href="product.html">Product details style 1</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-2.html">Product details style 2</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-3.html">Product details style 3</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-4.html">Product details style 4</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-5.html">Product details style 5</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-6.html">Product details style 6</a></li>
                                                                    <li class="supmenu-li"><a href="product-style-7.html">Product details style 7</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Other style</h2>
                                                                <a href="#feature05" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                                    <span>Other style</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse" id="feature05">
                                                                    <li class="supmenu-li"><a href="checkout-1.html">Checkout style 1</a></li>
                                                                    <li class="supmenu-li"><a href="checkout-2.html">Checkout style 2</a></li>
                                                                    <li class="supmenu-li"><a href="checkout-3.html">Checkout style 3</a></li>
                                                                    <li class="supmenu-li"><a href="cart.html">Cart style 1</a></li>
                                                                    <li class="supmenu-li"><a href="cart-2.html">Cart style 2</a></li>
                                                                    <li class="supmenu-li"><a href="cart-3.html">Cart style 3</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Buy vegist <span class="hot">Hot</span></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- main-menu end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu end -->
            <!-- minicart start -->
            <div class="mini-cart">
                <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
                <div class="cart-item-title">
                    <p>
                        <span class="cart-count-desc">There are</span>
                        <span class="cart-count-item bigcounter">4</span>
                        <span class="cart-count-desc">Products</span>
                    </p>
                </div>
                <ul class="cart-item-loop">
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.html">
                                <img src="{{asset('image/cart-img.jpg')}}" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.html">Fresh apple 5kg</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$250.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.html">
                                <img src="{{asset('image/cart-img02.jpg')}}" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.html">Natural grassbean 4kg</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$300.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.html">
                                <img src="{{asset('image/cart-img03.jpg')}}" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.html">Organic coconut juice 5ltr</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$250.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.html">
                                <img src="{{asset('image/cart-img04.jpg')}}" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.html">Orange juice 5ltr</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$350.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="subtotal-title-area">
                    <li class="subtotal-info">
                        <div class="subtotal-titles">
                            <h6>Sub total:</h6>
                            <span class="subtotal-price">$750.00 USD</span>
                        </div>
                    </li>
                    <li class="mini-cart-btns">
                        <div class="cart-btns">
                            <a href="cart-3.html" class="btn btn-style2">View cart</a>
                            <a href="checkout-3.html" class="btn btn-style2">Checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- minicart end -->
            <!-- mobile search start -->
            <div class="modal fade" id="search-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="search-content">
                                            <div class="search-engine">
                                                <input type="text" name="search" placeholder="Search Product.">
                                                <button class="search-btn" type="button"><i class="ion-ios-search-strong"></i></button>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile search end -->
        </header>
        <!-- header end -->
        <!--home page slider start-->
        <section class="home-slider-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menu-slider3">
                            <div class="menu-content"></div>
                            <div class="menu-slider">
                                <div class="home-slider-3">
                                    <div class="home-slider3 owl-carousel owl-theme">
                                        <div class="items">
                                            <div class="img-back" style="background-image:url(image/slider9.jpg);">
                                                <div class="slide-c-1 h-s-content">
                                                    <span class="slider-name">Fresh meant</span>
                                                    <h1>Super market vegbox<br>start from <span class="slider-offer">$9</span></h1>
                                                    <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="img-back" style="background-image:url(image/slider7.jpg);">
                                                <div class="slide-c-2 h-s-content">
                                                    <span class="slider-name">Top selling!</span>
                                                    <h1>Organic honey</h1>
                                                    <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="img-back" style="background-image:url(image/slider8.jpg);">
                                                <div class="slide-c-3 h-s-content">
                                                    <span class="slider-name">Summer juice</span>
                                                    <h1>Your first order<br><span class="slider-offer">20% off</span> at juice</h1>
                                                    <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home page slider end-->
        <!-- service start -->
        <section class="service-section section1-t-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="service">
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-truck"></i>
                                    <div class="service-content">
                                        <span>Free delivary</span>
                                        <p>Orders from all item</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-money"></i>
                                    <div class="service-content">
                                        <span>Return & refund</span>
                                        <p>Money back guarantee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-headphone"></i>
                                    <div class="service-content">
                                        <span>Quality support</span>
                                        <p>Alway online 24/7</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-email"></i>
                                    <div class="service-content">
                                        <span>Join newslleter</span>
                                        <p>20% off by subscribing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service end -->
        <!-- banner grid start -->
        <section class="section1-t-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="left-right-column">
                            <div class="left-column">
                                <div class="left-banner">
                                    <div class="l-banner">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('image/left-banner.jpg')}}" class="img-fluid" alt="left-banner">
                                        </a>
                                        <div class="left-banner-content">
                                            <span>Pure and natural</span>
                                            <h2>The benefits of<br>vegetables</h2>
                                            <a href="product-style-3.html" class="btn btn-style3">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- special products start -->
                                <div class="special-product section1-t-padding">
                                    <div class="left-section-title">
                                        <h4>Special <span>product</span></h4>
                                    </div>
                                    <a href="#special-pro" data-bs-toggle="collapse" class="responsive-collapse">Special <span> products</span><i class="fa fa-angle-down"></i></a>
                                    <div class="special-pro swiper-container collapse" id="special-pro">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$580.00 USD</span>
                                                            <span class="old-price"><del>$590.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$130.00 USD</span>
                                                            <span class="old-price"><del>$150.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-5.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-05.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Vegetable tomato fresh</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$133.00 USD</span>
                                                            <span class="old-price"><del>$145.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$139.00 USD</span>
                                                            <span class="old-price"><del>$160.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$580.00 USD</span>
                                                            <span class="old-price"><del>$590.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$93.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$167.00 USD</span>
                                                            <span class="old-price"><del>$179.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$230.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$580.00 USD</span>
                                                            <span class="old-price"><del>$590.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$130.00 USD</span>
                                                            <span class="old-price"><del>$150.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- special products end -->
                                <!-- testimonial start -->
                                <div class="testimonial-3 section1-t-padding">
                                    <div class="left-section-title">
                                        <h4>Customer <span>reviews</span></h4>
                                    </div>
                                    <div class="testi-3 owl-carousel owl-theme">
                                        <div class="items">
                                            <div class="testimonial-area">
                                                <span class="tsti-title">“Flexibility”</span>
                                                <p>“ I love this theme. Higly customizable, Easy to use and very flexible theme....</p>
                                                <div class="testi-name">
                                                    <h6>By disarak</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="testimonial-area">
                                                <span class="tsti-title">“Customer support”</span>
                                                <p>“ The design is really good and site is very responsive. However, what compel...</p>
                                                <div class="testi-name">
                                                    <h6>By cremica_foods</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="testimonial-area">
                                                <span class="tsti-title">“Frendly support”</span>
                                                <p>“ This theme is really nice and responsive. I really like it. Anybody can use...</p>
                                                <div class="testi-name">
                                                    <h6>By sametin8</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonial end -->
                                <!-- left banner-2 start -->
                                <div class="left-banner section1-t-padding">
                                    <div class="l-banner">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('image/left-banner2.jpg')}}" class="img-fluid" alt="left-banner">
                                        </a>
                                        <div class="left-banner-content">
                                            <span>Fresh food</span>
                                            <h2>Fruits collection</h2>
                                            <a href="javascript:void(0)" class="btn btn-style3">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- left banner-2 end -->
                                <!-- trending products left start -->
                                <div class="tred-product section1-tb-padding">
                                    <div class="left-section-title">
                                        <h4>Trending <span>product</span></h4>
                                    </div>
                                    <a href="#tred-products" data-bs-toggle="collapse" class="responsive-collapse">Trending <span>products</span> <i class="fa fa-angle-down"></i></a>
                                    <div class="trening-left-pro swiper-container collapse" id="tred-products">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$580.00 USD</span>
                                                            <span class="old-price"><del>$590.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$130.00 USD</span>
                                                            <span class="old-price"><del>$150.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-5.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-05.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Vegetable tomato fresh</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$133.00 USD</span>
                                                            <span class="old-price"><del>$145.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$139.00 USD</span>
                                                            <span class="old-price"><del>$160.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$580.00 USD</span>
                                                            <span class="old-price"><del>$590.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star b-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$93.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star d-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$167.00 USD</span>
                                                            <span class="old-price"><del>$179.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$230.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$580.00 USD</span>
                                                            <span class="old-price"><del>$590.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star c-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$130.00 USD</span>
                                                            <span class="old-price"><del>$150.00 USD</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.html">
                                                                <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- trending products end -->
                                <!-- big sale start -->
                                <div class="left-deal-bg" style="background-image: url(image/dealbanner1.1.jpg);">
                                    <div class="left-deal-c">
                                        <h2>Big <span>50%</span></h2>
                                        <h4>Offer</h4>
                                        <a href="grid-list.html">Only Accessories Fashion</a>
                                    </div>
                                </div>
                                <!-- big sale end -->
                                <!-- home brand start -->
                                <div class="section1-tb-padding">
                                    <div class="left-section-title">
                                        <h4>Our <span>brand</span></h4>
                                    </div>
                                    <div class="home3-brand owl-carousel owl-theme">
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l1.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l2.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l3.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l4.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l5.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l6.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l7.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="{{asset('image/brand/home-123/l8.png')}}" class="img-fluid" alt="brand-image">
                                        </div>
                                    </div>
                                </div>
                                <!-- home brand end -->
                            </div>
                            <div class="right-column">
                                <!-- grid banner start -->
                                <div class="organic-food-fresh-banner">
                                    <div class="offer-banner">
                                        <a href="product-style-3.html" class="banner-hover">
                                            <img src="{{asset('image/home3-banner.jpg')}}" alt="offer-banner" class="img-fluid">
                                        </a>
                                        <div class="banner-content">
                                            <h2>Oranges food<br><span class="banner-discount">25% discount</span></h2>
                                            <a href="product-style-3.html">Shop now</a>
                                        </div>
                                    </div>
                                    <div class="offer-banner">
                                        <a href="product-style-3.html" class="banner-hover">
                                            <img src="{{asset('image/home3-banner2.jpg')}}" alt="offer-banner" class="img-fluid">
                                        </a>
                                        <div class="banner-content">
                                            <h2>fresh drinks<br><span class="banner-discount">Get 30% off</span></h2>
                                            <a href="product-style-3.html">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- grid banner end -->
                                <!-- teb product start -->
                                <div class="pro-tab section1-t-padding">
                                    <div class="section-title3">
                                        <h2><span>Our products</span></h2>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home">New product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile">Special product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#featured">Featured product</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-pro-slider">
                                        <div class="tab-pane fade show active" id="home">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="{{route('vegist.detail')}}">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-20%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$130.00 USD</span>
                                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-5.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-05.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Vegetable tomato fresh</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$133.00 USD</span>
                                                                    <span class="old-price"><del>$145.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-21%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$139.00 USD</span>
                                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$93.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$167.00 USD</span>
                                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$230.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-20%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$130.00 USD</span>
                                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$93.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$167.00 USD</span>
                                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$230.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh organic fruit (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$130.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-2.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-02.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh & healty food</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$126.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-20%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$130.00 USD</span>
                                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-20%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$130.00 USD</span>
                                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-5.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-05.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Vegetable tomato fresh</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$133.00 USD</span>
                                                                    <span class="old-price"><del>$145.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-21%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$139.00 USD</span>
                                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$93.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$167.00 USD</span>
                                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$230.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" id="featured">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-21%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$139.00 USD</span>
                                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$93.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$167.00 USD</span>
                                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$230.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-21%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$139.00 USD</span>
                                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star b-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$93.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-12%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star d-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$167.00 USD</span>
                                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$230.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-10%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-20%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star c-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$130.00 USD</span>
                                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="product-style-3.html">
                                                                        <img src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1" class="img-fluid">
                                                                        <img src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-text">New</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$117.00 USD</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- teb product end -->
                                <!-- full banner start -->
                                <div class="full-banner section1-t-padding">
                                    <div class="banner-main">
                                        <a href="product-style-3.html" class="banner-hover">
                                            <img src="{{asset('image/full-banner.jpg')}}" class="img-fluid" alt="banner-image">
                                        </a>
                                        <div class="full-banner-conten">
                                            <span>New customer offers</span>
                                            <h3>Cooked vegetable with sauce</h3>
                                            <a href="product-style-3.html" class="btn btn-style3">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- full banner end -->
                                <!-- deal of the day start -->
                                <div class="deal3-banner section1-t-padding">
                                    <div class="deal">
                                        <div class="deal-day owl-carousel owl-theme">
                                            <div class="items">
                                                <div class="deal-area">
                                                    <div class="deal-img">
                                                        <a href="product-style-3.html">
                                                            <img src="{{asset('image/deal-image/image01.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <a href="product-style-3.html" class="additional-image">
                                                            <img src="{{asset('image/deal-image/image1.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <div class="Pro-lable">
                                                            <span class="p-discount">-18%</span>
                                                        </div>
                                                    </div>
                                                    <div class="deal-caption">
                                                        <div class="deal-title">
                                                            <h4>Limited quantities</h4>
                                                            <h3>Deal of the day</h3>
                                                        </div>
                                                        <div class="deal-rating">
                                                            <span class="d-rating">
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-pro-name"><a href="product-style-3.html"> Fresh & healthy food</a></h3>
                                                        <div class="deal-price">
                                                            <span class="new-price">$167.00 USD</span>
                                                            <span class="old-price"><del>$179.00 USD</del></span>
                                                        </div>
                                                        <ul class="contdown_row">
                                                            <li class="countdown_section">
                                                                <span id="days" class="countdown_timer">254</span>
                                                                <span class="countdown_title">Day</span>
                                                            </li>
                                                            <li class="countdown_section">
                                                                <span id="hours" class="countdown_timer">11</span>
                                                                <span class="countdown_title">Hrs</span>
                                                            </li>
                                                            <li class="countdown_section">
                                                                <span id="minutes" class="countdown_timer">33</span>
                                                                <span class="countdown_title">Min</span>
                                                            </li>
                                                            <li class="countdown_section">
                                                                <span id="seconds" class="countdown_timer">36</span>
                                                                <span class="countdown_title">Sec</span>
                                                            </li>
                                                        </ul>
                                                        <a href="cart-3.html" class="deal-cart"><i class="fa fa-shopping-bag"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="deal-area">
                                                    <div class="deal-img">
                                                        <a href="product-style-3.html">
                                                            <img src="{{asset('image/deal-image/image02.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <a href="product-style-3.html" class="additional-image">
                                                            <img src="{{asset('image/deal-image/image2.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <div class="Pro-lable">
                                                            <span class="p-discount">-12%</span>
                                                        </div>
                                                    </div>
                                                    <div class="deal-caption">
                                                        <div class="deal-title">
                                                            <h4>Limited quantities</h4>
                                                            <h3>Deal of the day</h3>
                                                        </div>
                                                        <div class="deal-rating">
                                                            <span class="d-rating">
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-pro-name"><a href="product-style-3.html"> Fresh litchi 100% organic</a></h3>
                                                        <div class="deal-price">
                                                            <span class="new-price">$116.27 USD</span>
                                                            <span class="old-price"><del>$124.02 USD</del></span>
                                                        </div>
                                                        <a href="cart-3.html" class="deal-cart"><i class="fa fa-shopping-bag"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="deal-area">
                                                    <div class="deal-img">
                                                        <a href="product-style-3.html">
                                                            <img src="{{asset('image/deal-image/image03.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <a href="product-style-3.html" class="additional-image">
                                                            <img src="{{asset('image/deal-image/image3.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <div class="Pro-lable">
                                                            <span class="p-discount">8%</span>
                                                        </div>
                                                    </div>
                                                    <div class="deal-caption">
                                                        <div class="deal-title">
                                                            <h4>Limited quantities</h4>
                                                            <h3>Deal of the day</h3>
                                                        </div>
                                                        <div class="deal-rating">
                                                            <span class="d-rating">
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-pro-name"><a href="product-style-3.html">Blackberry 100%organic</a></h3>
                                                        <div class="deal-price">
                                                            <span class="new-price">$387.57 USD</span>
                                                            <span class="old-price"><del>$573.60 USD</del></span>
                                                        </div>
                                                        <a href="cart-3.html" class="deal-cart"><i class="fa fa-shopping-bag"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="deal-area">
                                                    <div class="deal-img">
                                                        <a href="product-style-3.html">
                                                            <img src="{{asset('image/deal-image/image04.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <a href="product-style-3.html" class="additional-image">
                                                            <img src="{{asset('image/deal-image/image4.jpg')}}" class="img-fluid" alt="deal-image">
                                                        </a>
                                                        <div class="Pro-lable">
                                                            <span class="p-discount">-20%</span>
                                                        </div>
                                                    </div>
                                                    <div class="deal-caption">
                                                        <div class="deal-title">
                                                            <h4>Limited quantities</h4>
                                                            <h3>Deal of the day</h3>
                                                        </div>
                                                        <div class="deal-rating">
                                                            <span class="d-rating">
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star d-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-pro-name"><a href="product-style-3.html"> Fresh apple</a></h3>
                                                        <div class="deal-price">
                                                            <span class="new-price">$387.57 USD</span>
                                                            <span class="old-price"><del>$542.59 USD</del></span>
                                                        </div>
                                                        <a href="javascript:void(0)" class="deal-cart"><i class="fa fa-shopping-bag"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-banner">
                                            <div class="l-banner">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('image/deal-b.jpg')}}" class="img-fluid" alt="deal-banner">
                                                </a>
                                                <div class="deal-banner-c">
                                                    <span class="color-text">Winter veg</span>
                                                    <h3>Vegan <span>$49.99</span></h3>
                                                    <a href="cart-3.html" class="btn btn-style3">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- deal of the day end -->
                                <!-- featured products start -->
                                <div class="featured-p section1-t-padding">
                                    <div class="section-title3">
                                        <h2><span>Featured products</span></h2>
                                    </div>
                                    <div class="featured-products-slider owl-carousel owl-theme">
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-1.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-01.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Fresh organic fruit (50gm)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$130.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-2.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-02.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Fresh & healty food</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$126.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-3.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-03.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-20%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Fresh apple</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$130.00 USD</span>
                                                    <span class="old-price"><del>$150.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-4.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-04.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Fresh litchi 100% organic</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$117.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-5.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-05.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-12%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Vegetable tomato fresh</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$133.00 USD</span>
                                                    <span class="old-price"><del>$145.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-6.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-06.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-21%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Natural grassbean</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$139.00 USD</span>
                                                    <span class="old-price"><del>$160.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-7.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-07.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-10%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Fresh dryed almod (50gm)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$580.00 USD</span>
                                                    <span class="old-price"><del>$590.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-8.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-08.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Orange juice (5ltr)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$93.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-9.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-09.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-12%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Organic coconet (5ltr) juice</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$167.00 USD</span>
                                                    <span class="old-price"><del>$179.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-10.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-010.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Shrimp jumbo (5Lb)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$230.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-11.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-011.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Sp.red fresh guava</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$45.00 USD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.html">
                                                        <img class="img-fluid" src="{{asset('image/pro/pro-img-12.jpg')}}" alt="pro-img1">
                                                        <img class="img-fluid additional-image" src="{{asset('image/pro/pro-img-012.jpg')}}" alt="additional image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-25%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="product-style-3.html">Fresh mussel (500g)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star d-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$245.00 USD</span>
                                                    <span class="old-price"><del>$270.00 USD</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured products end -->
                                <!-- blog start -->
                                <div class="section1-tb-padding blog3">
                                    <div class="section-title3">
                                        <h2><span>Recent news</span></h2>
                                    </div>
                                    <div class="home3-blog owl-carousel owl-theme">
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 6 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">Green onion knife and salad plased</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                        <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-2.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">All time fresh every time healthy</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                        <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-3.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">Health and skin for your organic</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                        <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-4.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">Health and skin for your organic</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                        <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-5.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">Organic mix masala fresh & soft</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                        <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-6.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">Fresh organic brand and picnic</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                        <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="blog-start">
                                                <div class="blog-image">
                                                    <a href="blog-style-3-details.html">
                                                        <img src="{{asset('image/blog-image/blog-7.jpg')}}" alt="blog-image" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date-comment">
                                                        <span class="blog-date"><i class="ti-calendar"></i> Jan 8, 2021</span>
                                                        <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                                    </div>
                                                    <div class="blog-title">
                                                        <h6><a href="blog-style-3-details.html">Vegist special liquide fresh vegetable</a></h6>
                                                    </div>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                                    <div class="more-blog">
                                                        <a href="blog-style-3-details.html" class="read-link">
                                                            <span>Read more</span>
                                                            <i class="ti-arrow-right"></i>
                                                        </a>
                                                       <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog end -->
        <!-- quick veiw start -->
        <section class="quick-view">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="quick-veiw-area">
                            <div class="quick-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-1">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/prro-page-image01.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image1-1.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image1.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image2.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image2-2.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image3.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{asset('image/pro-page-image/pro-page-image03.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                    <li class="nav-item items">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="{{asset('image/pro-page-image/image1.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="{{asset('image/pro-page-image/image2.jpg')}}" class="img-fluid" alt="iamge"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="{{asset('image/pro-page-image/image3.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="{{asset('image/pro-page-image/image4.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="{{asset('image/pro-page-image/image5.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="{{asset('image/pro-page-image/image6.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="{{asset('image/pro-page-image/image8.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="{{asset('image/pro-page-image/image7.jpg')}}" class="img-fluid" alt="image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quick-caption">
                                <h4>Fresh organic reachter</h4>
                                <div class="quick-price">
                                    <span class="new-price">$350.00 USD</span>
                                    <span class="old-price"><del>$399.99 USD</del></span>
                                </div>
                                <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                </div>
                                <div class="pro-size">
                                    <label>Size: </label>
                                    <select>
                                        <option>1 ltr</option>
                                        <option>3 ltr</option>
                                        <option>5 ltr</option>
                                    </select>
                                </div>
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                    <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick veiw end -->
        <!-- footer start -->
        <section class="footer3 section0-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home3-footer">
                            <div class="f-logo">
                                <ul class="footer-ul">
                                    <li class="footer-li footer-logo">
                                        <a href="index3.html">
                                            <img class="img-fluid" src="{{asset('image/logo2.png')}}" alt="">
                                        </a>
                                    </li>
                                    <li class="footer-li footer-address">
                                        <ul class="foote-map">
                                            <li class="footer-icon">
                                                <i class="ion-ios-location"></i>
                                            </li>
                                            <li>
                                                <span>401 Broadway 24th floor
</span>
                                                <span>Near ant mall cross road</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer-li footer-contact">
                                        <ul class="footer-num">
                                            <li class="footer-icon">
                                                <i class="ion-ios-telephone"></i>
                                            </li>
                                            <li class="footer-info">
                                                <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                                <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-bottom">
                                <div class="footer-link" id="footer-accordian">
                                    <div class="f-link">
                                        <h2 class="h-footer">Services</h2>
                                        <a href="#t-cate" data-bs-toggle="collapse" class="h-footer">
                                            <span>Services</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                            <li class="f-link-ul-li"><a href="about-us.html">About vegist</a></li>
                                            <li class="f-link-ul-li"><a href="faq's.html">Faq's</a></li>
                                            <li class="f-link-ul-li"><a href="contact.html">Contact us</a></li>
                                            <li class="f-link-ul-li"><a href="blog-style-3-grid.html">News</a></li>
                                            <li class="f-link-ul-li"><a href="sitemap.html">Sitemap</a></li>
                                        </ul>
                                    </div>
                                    <div class="f-link">
                                        <h2 class="h-footer">Privacy & aerms</h2>
                                        <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                            <span>Privacy & terms</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                            <li class="f-link-ul-li"><a href="payment-policy.html">Payment policy</a></li>
                                            <li class="f-link-ul-li"><a href="privacy-policy.html">Privacy policy</a></li>
                                            <li class="f-link-ul-li"><a href="return-policy.html">Return policy</a></li>
                                            <li class="f-link-ul-li"><a href="shipping-policy.html">Shipping policy</a></li>
                                            <li class="f-link-ul-li"><a href="terms-conditions.html">Terms & conditions</a></li>
                                        </ul>
                                    </div>
                                    <div class="f-link">
                                        <h2 class="h-footer">My account</h2>
                                        <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                            <span>My account</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                            <li class="f-link-ul-li"><a href="account.html">My account</a></li>
                                            <li class="f-link-ul-li"><a href="cart-3.html">My cart</a></li>
                                            <li class="f-link-ul-li"><a href="tracking.html">Order history</a></li>
                                            <li class="f-link-ul-li"><a href="wishlist.html">My wishlist</a></li>
                                            <li class="f-link-ul-li"><a href="addresses.html">My address</a></li>
                                        </ul>
                                    </div>
                                    <div class="f-link">
                                        <h2 class="h-footer">Menu title</h2>
                                        <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                            <span>Menu title</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                            <li class="f-link-ul-li"><a href="product-style-3.html">Fruits</a></li>
                                            <li class="f-link-ul-li"><a href="product-style-3.html">Fast foods</a></li>
                                            <li class="f-link-ul-li"><a href="product-style-3.html">Vegetable</a></li>
                                            <li class="f-link-ul-li"><a href="product-style-3.html">Salads</a></li>
                                            <li class="f-link-ul-li"><a href="product-style-3.html">Bestseller</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-deal">
                                <div class="f-deal-content">
                                    <h2>Get the latest deals</h2>
                                    <p>Ana receive $20 coupon for first shopping</p>
                                </div>
                                <div class="footer-search">
                                    <form>
                                        <input type="text" name="email" placeholder="Enter your emain address">
                                        <a href="javascript:void(0)" class="btn btn-style1"><i class="ion-paper-airplane"></i></a>
                                    </form>
                                    <ul class="f-bottom">
                                        <li class="f-social">
                                            <a href="https://www.whatsapp.com/" class="f-icn-link"><i class="fa fa-whatsapp"></i></a>
                                            <a href="https://www.facebook.com/" class="f-icn-link"><i class="fa fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/" class="f-icn-link"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/" class="f-icn-link"><i class="fa fa-instagram"></i></a>
                                            <a href="https://www.pinterest.com/" class="f-icn-link"><i class="fa fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer end -->
        <!-- copyright start -->
        <section class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="f-bottom">
                            <li class="f-c f-copyright">
                                <p>Copyright <i class="fa fa-copyright"></i> 2021 spacingtech rights reserved</p>
                            </li>
                            <li class="f-c f-payment">
                                <a href="checkout-3.html"><img src="{{asset('image/payment.png')}}" class="img-fluid" alt="payment image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- copyright end -->
        <!-- newsletter pop-up start -->
        <div class="vegist-popup animated modal fadeIn" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup-content">
                            <!-- popup close button start -->
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close" class="close-btn"><i class="ion-close-round"></i></a>
                            <!-- popup close button end -->
                            <!-- popup content area start -->
                            <div class="pop-up-newsletter" style="background-image: url(image/news-popup.jpg);">
                                <div class="logo-content">
                                    <a href="index1.html"><img src="{{asset('image/logo1.png')}}" alt="image" class="img-fluid"></a>
                                    <h4>Become a subscriber</h4>
                                    <span>Subscribe to get the notification of latest posts</span>
                                </div>
                                <div class="subscribe-area">
                                    <input type="text" name="comment" placeholder="Your email address">
                                    <a href="index1.html" class="btn btn-style1">Subscribe</a>
                                </div>
                            </div>
                            <!-- popup content area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter pop-up end -->
        <!-- back to top start -->
        <a href="javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <div class="mm-fullscreen-bg"></div>
        <!-- jquery -->
        <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery -->
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- popper -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- owl carousal -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/fontawesome.min.js')}}"></script>
        <script src="{{asset('js/swiper.min.js')}}"></script>
        <!-- custom -->
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>