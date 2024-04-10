<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('frontend.parts.head')

</head>

<body>


    <!--mini cart-->
    @include('frontend.parts.minicart')
    <!--mini cart end-->
    <!--header area start-->
    @include('frontend.parts.header')
    <!--header area end-->

    <!--slider area start-->
    <section class="slider_section mb-63">
        <div class="slider_area slick_slider_activation" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": true,
            "autoplay": true,
            "speed": 300,
            "infinite": true
        }'>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{Asset('frontend/assets/img/slider/slider4.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Come to us</span>
                                <h1>make you be fashionable</h1>
                                <p>"You will discover the latest trends and elevate <br >your style to new heights with us."</p>
                                <a class="btn btn-primary" href="/frontend/shop">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{Asset('frontend/assets/img/slider/slider2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Come to us</span>
                                <h1>Make you be confident</h1>
                                <p>"You will discover a range of fashionable items <br> that will boost your confidence and help you <br> express your unique style effortlessly."</p>
                                <a class="btn btn-primary" href="/frontend/shop">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{Asset('frontend/assets/img/slider/slider3.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Come to us</span>
                                <h1>Make you be economical</h1>
                                <p>"You will find high-quality fashion items that <br> not only enhance your style but also ensure <br> your savings."</p>
                                <a class="btn btn-primary" href="/frontend/shop">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping section start-->
    <section class="shipping_section mb-102">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_inner d-flex justify-content-between">
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-cursor icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Free Shipping</h3>
                                <p>Orders over $100</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-reload icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Free Returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-lock icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>100% Payment Secure</h3>
                                <p>Payment Online</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-tag icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Affordable Price</h3>
                                <p>Guaranteed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping section end-->

    <!-- banner section start -->
    <section class="banner_section mb-109">
        <div class="container">
            <div class="section_title mb-60">
                <h2>featured collections</h2>
            </div>
            <div class="banner_container d-flex">
                <figure class="single_banner position-relative mr-30">
                    <img src="{{Asset('frontend/assets/img/bg/bg1.jpg')}}" alt="">
                    <figcaption class="banner_text position-absolute">
                        <h3>Zara Pattern <br> backpacks</h3>
                        <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                        <a class="btn btn-primary" href="/frontend/shop">Shop Now</a>
                    </figcaption>
                </figure>
                <figure class="single_banner position-relative">
                    <img src="{{Asset('frontend/assets/img/bg/bg2.jpg')}}" alt="">
                    <figcaption class="banner_text position-absolute">
                        <h3 class="text-white">Basic Color Caps</h3>
                        <p class="text-white">Minimalist never cool, choose and make <br> the simple great again!</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- banner section start -->
    <section class="banner_section banner_style2 mb-109">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <figure class="single_banner position-relative">
                        <img src="{{Asset('frontend/assets/img/bg/bg3.jpg')}}" alt="">
                        <div class="banner_text position-absolute">
                            <h3>Minimalist <br> sneaker</h3>
                            <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                            <a class="btn btn-primary" href="/frontend/shop">Shop Now</a>
                        </div>

                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <figure class="single_banner position-relative">
                        <img src="{{Asset('frontend/assets/img/bg/bg4.jpg')}}" alt="">
                        <div class="banner_text position-absolute text__style2">
                            <h3><span>50%</span> OFF <br> for Autumn</h3>
                            <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                            <a class="btn btn-primary" href="/frontend/shop">Shop Now</a>
                        </div>

                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- product section start -->
    <section class="product_section mb-80">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-60">
                <div class="section_title">
                    <h2>new arrivals</h2>
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all2" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
    <!-- Product -->
    @foreach($products as $product)
        <article class="col single_product">
        <figure>
            <div class="product_thumb">
                <a href="/frontend/product_details/{{$product -> id}}">
                    <img class="primary_img" src="{{Asset($product -> image)}}" alt="consectetur">
                </a>
                <div class="product_action">
                    <ul>
                        <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                data-tippy-inertia="true" data-tippy-delay="50"
                                data-tippy-arrow="true" data-tippy-placement="left"><i
                                    class="icon-heart icons"></i></a></li>
                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                data-tippy-delay="50" data-tippy-arrow="true"
                                data-tippy-placement="left"><i
                                    class="icon-size-fullscreen icons"></i></a></li>
                        <li class="compare"><a data-tippy="Compare" href="#"
                                data-tippy-inertia="true" data-tippy-delay="50"
                                data-tippy-arrow="true" data-tippy-placement="left"><i
                                    class="icon-refresh icons"></i></a></li>
                    </ul>
                </div>
            </div>
            <figcaption class="product_content text-center">
                <h4 class="product_name"><a href="/frontend/product-details/{{$product -> id}}">{{$product -> name}}</a></h4>
                <span>
                    <p>{{$product -> material}}</p>
                        </span>
                <div class="price_box">
                    <span class="current_price">${{$product -> price_sale}}</span>
                    <span class="old_price">${{$product -> price_nomal}}</span>
                </div>
                <div class="add_to_cart">
                    <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                        data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                        data-tippy-placement="top">Add To Cart
                    </a>
                </div>
            </figcaption>
        </figure>
    </article>
@endforeach
    <!-- End Product -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <!-- blog section start -->
    <section class="blog_section mb-140">
        <div class="container">
            <div class="product_header border-top d-flex justify-content-between  mb-60">
                <div class="section_title">
                    <h2>press & look</h2>
                </div>
                <div class="all_articles">
                    <a href="/frontend/blog-details">All articles</a>
                </div>
            </div>
            <div class="blog_container row">
                <div class="blog_slick slick_slider_activation" data-slick='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true,
                        "responsive":[
                          {"breakpoint":992, "settings": { "slidesToShow": 2 } },
                          {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                          {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                        ]
                    }'>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="/frontend/blog-details"><img src="{{Asset('frontend/assets/img/blog/blog1.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="/frontend/blog-details">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="/frontend/blog-details"><img src="{{Asset('frontend/assets/img/blog/blog2.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="/frontend/blog-details">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="/frontend/blog-details"><img src="{{Asset('frontend/assets/img/blog/blog3.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="/frontend/blog-details">Calvin Klein Shoes Collection 2020, Activites Summer</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="col single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="/frontend/blog-details"><img src="{{Asset('frontend/assets/img/blog/blog1.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="/frontend/blog-details">Five things you only know if you’re at Chanel's Hamburg
                                        Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->



    <!--newsletter section start-->
    @include('frontend.parts.newsletter')
    <!--newsletter section end-->

    <!--footer area start-->
    @include('frontend.parts.footer')
    <!--footer area end-->


    <!-- JS
============================================ -->
    @include('frontend.parts.JS')
</body>

</html>
