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
        <link rel="shortcut icon" type="image/favicon" href="{{asset('image/fevicon.png')}}">
        @include('vegist.partials.styles')
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
        @include('vegist.partials.header')
        <!-- header end -->
        <!--home page slider start-->

        @yield('slider')
        @yield('content')
        <!-- copyright start -->
        @include('vegist.partials.footer')
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
       @include('vegist.partials.scripts')
    </body>
</html>
