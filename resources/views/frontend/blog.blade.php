<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('frontend.parts.head')
</head>

<body>

    <!--offcanvas menu area start-->
    <div class="body_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="header_contact_info">
                            <ul class="d-flex">
                                <li class="text-white"> <i class="icons icon-phone"></i> <a href="tel:+05483716566">+054 8371 65 66</a></li>
                                <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a href="#">uthrstore@domain.com</a></li>
                            </ul>
                        </div>
                        <div class="header_social d-flex">
                            <span>Follow us</span>
                            <ul class="d-flex">
                                <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="language_currency">
                            <ul class="d-flex">
                                <li class="language"><a href="#"> Eng <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#"> USd <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="product-details.html"> Product Details</a>
                                </li>
                                <li><a href="#">sale</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>

                                </li>
                                <li><a href="#">buy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="icon-close icons"></i></a>
                </div>
            </div>
            <div class="cart_item">
               <div class="cart_img">
                   <a href="#"><img src="{{Asset('frontend/assets/img/product/product1.jpg')}}" alt=""></a>
               </div>
                <div class="cart_info">
                    <a href="#">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
            <div class="cart_item">
               <div class="cart_img">
                   <a href="#"><img src="{{Asset('frontend/assets/img/product/product2.jpg')}}" alt=""></a>
               </div>
                <div class="cart_info">
                    <a href="#">Letraset Sheets</a>
                    <p>1 x <span> $60.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$125.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$125.00</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
           <div class="cart_button">
                <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->
    <!--header area start-->
    @include('frontend.parts.header')
    <!--header area end-->

      <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                        <h3>Write, Share & Discuss <br> Together</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog page section start-->
    <div class="blog_page_section mb-140">
        <div class="container">
            <div class="blog_messonry_button d-flex justify-content-center">
                <button class="active" data-filter="*">all</button>
                <button data-filter=".news">news </button>
                <button data-filter=".products">products </button>
                <button data-filter=".nspiration">nspiration </button>
                <button data-filter=".community">community</button>
                <button data-filter=".others">others</button>
            </div>
            <div class="row blog_page_gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item nspiration community">
                    <article class="single_blog products community">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog1.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news nspiration others">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog2.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Inspiration</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item products community">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog3.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Lookbook</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news nspiration">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog4.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news community others">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog5.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Inspiration</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item products nspiration">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog6.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Lookbook</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news community">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog7.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">News</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item products community">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog8.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Inspiration</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 gird_item news nspiration others">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{Asset('frontend/assets/img/blog/blog9.jpg')}}" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <div class="blog_meta">
                                    <ul class="d-flex">
                                        <li><span class="meta_tag">Lookbook</span></li>
                                        <li><span>May 25, 2020</span></li>
                                    </ul>
                                </div>
                                <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="pagination_style pagination blog_pagination justify-content-center">
                <ul class="d-flex">
                    <li><a  class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">15</a></li>
                    <li><a href="#">16</a></li>
                    <li><a href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--blog page section end-->

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
