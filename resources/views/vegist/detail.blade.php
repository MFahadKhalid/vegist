@extends('vegist.layout.scaffold')
@section('content')
<section class="section1-t-padding">
    <div class="container">
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
                            <a href="javascript:void(0)" class="btn btn-style3">Shop now</a>
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
                                            <span class="new-price">$77.00 USD</span>
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
                                            <span class="new-price">$80.00 USD</span>
                                            <span class="old-price"><del>$90.00 USD</del></span>
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
                                            <span class="new-price">$75.00 USD</span>
                                            <span class="old-price"><del>$80.00 USD</del></span>
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
                                            <span class="new-price">$45.00 USD</span>
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
                                            <span class="new-price">$105.00 USD</span>
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
                                            <span class="new-price">$90.00 USD</span>
                                            <span class="old-price"><del>$95.00 USD</del></span>
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
                                            <span class="new-price">$145.00 USD</span>
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
                                            <span class="new-price">$99.00 USD</span>
                                            <span class="old-price"><del>$110.00 USD</del></span>
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
                                            <span class="new-price">$199.00 USD</span>
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
                                            <span class="new-price">$95.00 USD</span>
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
                                            <span class="new-price">$93.00 USD</span>
                                            <span class="old-price"><del>$95.00 USD</del></span>
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
                                            <span class="new-price">$120.00 USD</span>
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
                                            <span class="new-price">$45.00 USD</span>
                                            <span class="old-price"><del>$60.00 USD</del></span>
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
                                            <span class="new-price">$60.00 USD</span>
                                            <span class="old-price"><del>$70.00 USD</del></span>
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
                                            <span class="new-price">$88.00 USD</span>
                                            <span class="old-price"><del>$90.00 USD</del></span>
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
                                            <span class="new-price">$95.00 USD</span>
                                            <span class="old-price"><del>$99.00 USD</del></span>
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
                                            <span class="new-price">$150.00 USD</span>
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
                                            <span class="new-price">$185.00 USD</span>
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
                                            <span class="new-price">$72.00 USD</span>
                                            <span class="old-price"><del>$79.00 USD</del></span>
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
                                            <span class="new-price">$50.00 USD</span>
                                            <span class="old-price"><del>$75.00 USD</del></span>
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
                                            <span class="new-price">$199.00 USD</span>
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
                        <a href="javascript:void(0)">Only Accessories Fashion</a>
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
                <!-- product info start -->
                <section class="pro-page">
                    <div class="row pro-image">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12 larg-image">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="image-11">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="image-22">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/prro-page-image01.jpg)">
                                            <img src="{{asset('image/pro-page-image/prro-page-image01.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade show active" id="image-33">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image1-1.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image1-1.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="image-44">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image1.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image1.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="image-55">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image2.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image2.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="image-66">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image2-2.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image2-2.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="image-77">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image3.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image3.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="image-88">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image03.jpg)">
                                            <img src="{{asset('image/pro-page-image/pro-page-image03.jpg')}}" class="img-fluid" alt="image">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                <li class="nav-item items">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#image-11"><img src="{{asset('image/pro-page-image/image1.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-22"><img src="{{asset('image/pro-page-image/image2.jpg')}}" class="img-fluid" alt="iamge"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-33"><img src="{{asset('image/pro-page-image/image3.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-44"><img src="{{asset('image/pro-page-image/image4.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-55"><img src="{{asset('image/pro-page-image/image5.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-66"><img src="{{asset('image/pro-page-image/image6.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-77"><img src="{{asset('image/pro-page-image/image8.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-88"><img src="{{asset('image/pro-page-image/image7.jpg')}}" class="img-fluid" alt="image"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 col-12 pro-info">
                            <h4>Fresh Green Orange</h4>
                            <div class="rating">
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star d-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-availabale">
                                <span class="available">Availability:</span>
                                <span class="pro-instock">In stock</span>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">$180.00 CAD</span>
                                <div class="Pro-lable">
                                    <span class="p-discount">New</span>
                                </div>
                            </div>
                            <span class="pro-details">Hurry up! only <span class="pro-number">7</span> products left in stock!</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer of type and</p>
                            <div class="pro-items">
                                <span class="pro-size">Size:</span>
                                <ul class="pro-wight">
                                    <li><a href="javascript:void(0)" class="active">1KG</a></li>
                                    <li><a href="javascript:void(0)">2KG</a></li>
                                    <li><a href="javascript:void(0)">5KG</a></li>
                                </ul>
                            </div>
                            <div class="product-color">
                                <span class="color-label">Color:</span>
                                <span class="color">
                                    <a href="javascript:void(0)" class="active"><span></span></a>
                                    <a href="javascript:void(0)"><span></span></a>
                                    <a href="javascript:void(0)"><span></span></a>
                                </span>
                            </div>
                            <div class="pro-qty">
                                <span class="qty">Quantity:</span>
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                </div>
                            </div>
                            <div class="pro-btn">
                                <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                <a href="cart-3.html"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                                <a href="checkout-3.html">Buy now</a>
                            </div>
                            <div class="share">
                                <span class="share-lable">Share:</span>
                                <ul class="share-icn">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="pay-img">
                                <a href="checkout-3.html">
                                    <img src="{{asset('image/pay-image.jpg')}}" class="img-fluid" alt="pay-image">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- product info end -->
                <!-- product page tab start -->
                <section class="row pro-page-content">
                    <div class="col">
                        <div class="pro-page-tab section1-t-padding">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Size chart</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-1">
                                    <div class="tab-1content">
                                        <h4>More detail</h4>
                                        <ul class="tab-description">
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                            <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                            <li>type here your detail one by one li more add</li>
                                            <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-2content">
                                        <h4>Key specification</h4>
                                        <ul class="tab-description">
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                            <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                            <li>type here your detail one by one li more add</li>
                                            <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="tab-2">
                                    <h4 class="reviews-title">Customer reviews</h4>
                                    <div class="customer-reviews t-desk-2">
                                        <span class="p-rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                        <p class="review-desck">Based on 2 reviews</p>
                                        <a href="#add-review" data-bs-toggle='collapse'>Write a review</a>
                                    </div>
                                    <div class="review-form collapse" id="add-review">
                                        <h4>Write a review</h4>
                                        <form>
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="Enter your name">
                                            <label>Email</label>
                                            <input type="text" name="mail" placeholder="Enter your Email">
                                            <label>Rating</label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <label>Review title</label>
                                            <input type="text" name="mail" placeholder="Review title">
                                            <label>Add comments</label>
                                            <textarea name="comment" placeholder="Write your comments"></textarea>
                                        </form>
                                    </div>
                                    <div class="customer-reviews">
                                        <span class="p-rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <h4 class="review-head">he also good and high product see like look</h4>
                                        <span class="reviews-editor">kelin patel <span class="review-name">on</span> fab 5, 2021</span>
                                        <p class="r-description">he also good and high product see like look</p>
                                    </div>
                                    <div class="customer-reviews">
                                        <span class="p-rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <h4 class="review-head">he also good and fresh fruit organic product see like look</h4>
                                        <span class="reviews-editor">Melvin louis <span class="review-name">on</span> fab 5, 2021</span>
                                        <p class="r-description">he also good and fresh fruit organic product see like look</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="tab-3">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe height="630" src="https://www.youtube.com/embed/0etCKCAsImI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="tab-5">
                                    <div class="more-description table-responsive">
                                        <table class="table table-bordered table-elastic table-condensed" style="font-size: 9px;">
                                            <thead>
                                                <tr class="top">
                                                    <th rowspan="2" scope="col">Vegetables<br> Serving Size<br> (gram weight/<br> ounce weight)</th>
                                                    <th rowspan="2" scope="col">Calories</th>
                                                    <th rowspan="2" scope="col">Calories<br> from Fat</th>
                                                    <th colspan="2" scope="col">Total Fat</th>
                                                    <th colspan="2" scope="col">Sodium</th>
                                                    <th colspan="2" scope="col">Potassium</th>
                                                    <th colspan="2" scope="col">Total<br> Carbo-hydrate</th>
                                                    <th colspan="2" scope="col">Dietary<br> Fiber</th>
                                                    <th scope="col">Sugars</th>
                                                    <th scope="col">Protein</th>
                                                    <th scope="col">Vitamin A</th>
                                                    <th scope="col">Vitamin C</th>
                                                    <th scope="col">Calcium</th>
                                                    <th scope="col">Iron</th>
                                                </tr>
                                                <tr class="text-center" style="font-size: 90%;">
                                                    <th scope="col">(g)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(mg)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(mg)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(g)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(g)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(g)</th>
                                                    <th scope="col">(g)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(%DV)</th>
                                                    <th scope="col">(%DV)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Asparagus<br> 5 spears<br> (93 g/3.3 oz)</th>
                                                    <td>20</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>230</td>
                                                    <td>7</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>10</td>
                                                    <td>15</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bell Pepper<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                    <td>25</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>40</td>
                                                    <td>2</td>
                                                    <td>220</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>190</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Broccoli<br> 1 medium stalk<br> (148 g/5.3 oz)</th>
                                                    <td>45</td>
                                                    <td>0</td>
                                                    <td>0.5</td>
                                                    <td>1</td>
                                                    <td>80</td>
                                                    <td>3</td>
                                                    <td>460</td>
                                                    <td>13</td>
                                                    <td>8</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>12</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                    <td>6</td>
                                                    <td>220</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Carrot<br> 1 carrot, 7" long,<br> 1 1/4" diameter<br> (78 g/2.8 oz)</th>
                                                    <td>30</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>60</td>
                                                    <td>3</td>
                                                    <td>250</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>110</td>
                                                    <td>10</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Cauliflower<br> 1/6 medium head<br> (99 g/3.5 oz)</th>
                                                    <td>25</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>30</td>
                                                    <td>1</td>
                                                    <td>270</td>
                                                    <td>8</td>
                                                    <td>5</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>100</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Celery<br> 2 medium stalks<br> (110 g/3.9 oz)</th>
                                                    <td>15</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>115</td>
                                                    <td>5</td>
                                                    <td>260</td>
                                                    <td>7</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                    <td>15</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Cucumber<br> 1/3 medium<br> (99 g/3.5 oz)</th>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>140</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>10</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Green (Snap) Beans<br> 3/4 cup cut<br> (83 g/3.0 oz)</th>
                                                    <td>20</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>200</td>
                                                    <td>6</td>
                                                    <td>5</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>12</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>10</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Green&nbsp;Cabbage<br> 1/12 medium head<br> (84 g/3.0 oz)</th>
                                                    <td>25</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>20</td>
                                                    <td>1</td>
                                                    <td>190</td>
                                                    <td>5</td>
                                                    <td>5</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>70</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Green Onion<br> 1/4 cup chopped<br> (25 g/0.9 oz)</th>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>70</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Iceberg Lettuce<br> 1/6 medium head<br> (89 g/3.2 oz)</th>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>125</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Leaf Lettuce<br> 1 1/2 cups shredded<br> (85 g/3.0 oz)</th>
                                                    <td>15</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>35</td>
                                                    <td>1</td>
                                                    <td>170</td>
                                                    <td>5</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>130</td>
                                                    <td>6</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Mushrooms<br> 5 medium<br> (84 g/3.0 oz)</th>
                                                    <td>20</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>15</td>
                                                    <td>0</td>
                                                    <td>300</td>
                                                    <td>9</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>0</td>
                                                    <td>3</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Onion<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                    <td>45</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>5</td>
                                                    <td>0</td>
                                                    <td>190</td>
                                                    <td>5</td>
                                                    <td>11</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>12</td>
                                                    <td>9</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>20</td>
                                                    <td>4</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Potato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                    <td>110</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>620</td>
                                                    <td>18</td>
                                                    <td>26</td>
                                                    <td>9</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>1</td>
                                                    <td>3</td>
                                                    <td>0</td>
                                                    <td>45</td>
                                                    <td>2</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Radishes<br> 7 radishes<br> (85 g/3.0 oz)</th>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>55</td>
                                                    <td>2</td>
                                                    <td>190</td>
                                                    <td>5</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>30</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Summer Squash<br> 1/2 medium<br> (98 g/3.5 oz)</th>
                                                    <td>20</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>260</td>
                                                    <td>7</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>6</td>
                                                    <td>30</td>
                                                    <td>2</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sweet Corn<br> kernels from 1<br> medium ear<br> (90 g/3.2 oz)</th>
                                                    <td>90</td>
                                                    <td>20</td>
                                                    <td>2.5</td>
                                                    <td>4</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>250</td>
                                                    <td>7</td>
                                                    <td>18</td>
                                                    <td>6</td>
                                                    <td>2</td>
                                                    <td>8</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>2</td>
                                                    <td>10</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr class="alert alert-warning">
                                                    <th scope="row">Sweet Potato<br> 1 medium, 5" long,<br> 2" diameter<br> (130 g/4.6 oz)</th>
                                                    <td>100</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>70</td>
                                                    <td>3</td>
                                                    <td>440</td>
                                                    <td>13</td>
                                                    <td>23</td>
                                                    <td>8</td>
                                                    <td>4</td>
                                                    <td>16</td>
                                                    <td>7</td>
                                                    <td>2</td>
                                                    <td>120</td>
                                                    <td>30</td>
                                                    <td>4</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tomato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                    <td>25</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>20</td>
                                                    <td>1</td>
                                                    <td>340</td>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>20</td>
                                                    <td>40</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- product page tab end -->
                <!-- releted product start -->
                <section class="section1-t-padding pro-releted">
                    <div class="section-title3">
                        <h2><span>Related Product</span></h2>
                    </div>
                    <div class="releted-products owl-carousel owl-theme">
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
                </section>
                <!-- releted product end -->
            </div>
        </div>
    </div>
</section>
@endsection
