@extends('vegist.layout.scaffold')
@section('slider')
@include('vegist.partials.slider')
@endsection
@section('content')
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
                                                                <h3><a href="{{route('vegist.detail')}}">Fresh dryed almod (50gm)</a></h3>
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
                                                                    <a href="{{route('vegist.detail')}}">
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
                                                                <h3><a href="{{route('vegist.detail')}}">Fresh apple</a></h3>
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
                                                                    <a href="{{route('vegist.detail')}}">
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
                                                                <h3><a href="{{route('vegist.detail')}}">Fresh litchi 100% organic</a></h3>
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
                                                                <h3><a href="{{route('vegist.detail')}}">Vegetable tomato fresh</a></h3>
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
                                                                    <a href="{{route('vegist.detail')}}">
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
                                                                <h3><a href="{{route('vegist.detail')}}">Natural grassbean</a></h3>
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

        <!-- footer end -->
@endsection

