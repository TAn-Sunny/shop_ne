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
                                    <a href="/frontend/home">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/product-details"> Product Details</a>
                                </li>
                                <li><a href="#">sale</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="/frontend/cart">cart</a></li>
                                        <li><a href="/frontend/checkout">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="/frontend/blog">blog</a></li>
                                        <li><a href="/frontend/blog-details">blog details</a></li>
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
                <a href="/frontend/cart"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="/frontend/checkout"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->
    <!--header area start-->
    @include('frontend.parts.header')
    <!--header area end-->

    <!--blog body area start-->
    <div class="blog_details">
       <div class="blog_details_thumb">
           <img src="{{Asset('frontend/assets/img/blog/blogbig.jpg')}}" alt="">
       </div>
        <div class="blog_wrapper_details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog_details_content">
                            <div class="post_header">
                                <h2 class="post_title">How to improve the flow of UI/UX</h2>
                                <div class="blog_meta">
                                   <ul class="d-flex">
                                       <li>Adam Levine </li>
                                       <li>December 27, 2020 </li>
                                       <li>INSPIRATION</li>
                                   </ul>
                                </div>
                            </div>
                            <div class="blog_details_desc">
                                <h3>Pinterest, cornhole meditation Blue Bottle art party meggings cardigan yr sustainable. Letterpress McSwepen, poieney’s fap</h3>
                                <p class="mb-35">Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.</p>
                                <p class="mb-50">Coventry is a city with a thousand years of history that has plenty to offer the visiting tourist. Located in the heart of Warwickshire.</p>
                                <blockquote class="mb-30">
                                    <p>“The forms that designers <br> produce are flexible, so long as the <br> results serve the need.”</p>
                                </blockquote>
                                <p class="david_moye mb-50"><span>DAVID MOYE,</span> Designer at Spotify</p>
                                <p>Cray post-ironic plaid, Helvetica keffiyeh tousled Carles banjo before they sold out blog photo booth Marfa semiotics Truffaut. Mustache Schlitz next level blog Williamsburg, deep v typewriter tote bag Banksy +1 literally. Lomo 8-bit pour-over mumblecore photo booth. Kitsch pork belly cred, small batch butcher selvage direct trade. Master cleanse Bushwick cornhole narwhal plaid. Seitan vegan Portland, master cleanse gluten-free fanny pack raw denim hoodie YOLO loko.</p>
                            </div>

                        </div>
                        <div class="related_posts">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <figure class="related_thumb">
                                       <img src="{{Asset('frontend/assets/img/blog/related1.jpg')}}" alt="">
                                    <div class="related_popup_icon">
                                        <a class="port_popup" href="assets/img/blog/related1.jpg"><i class="icon-size-fullscreen icons"></i></a>
                                    </div>
                                   </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <figure class="related_thumb">

                                       <img src="{{Asset('frontend/assets/img/blog/related2.jpg')}}" alt="">
                                    <div class="related_popup_icon">
                                        <a class="port_popup" href="assets/img/blog/related2.jpg"><i class="icon-size-fullscreen icons"></i></a>
                                    </div>
                                   </figure>
                                </div>
                            </div>
                        </div>
                        <div class="post_tags_social border-bottom">
                            <div class="post_tags d-flex justify-content-center align-items-center">
                               <span>TAGS: </span>
                                <ul class="d-flex">
                                    <li><a href="#">Inspiration,</a></li>
                                    <li><a href="#">Workspace,</a></li>
                                    <li><a href="#">Minimal,</a></li>
                                    <li><a href="#">Decoation</a></li>
                                </ul>
                            </div>
                            <div class="post__social d-flex justify-content-center align-items-center">
                               <span>SHARE:</span>
                                <ul class="d-flex">
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog_navigation">
                            <ul class="d-flex justify-content-between">
                                <li class="previous"><a href="#"><i class="icon-arrow-left icons"></i> Previous</a> <span>How to combine typography perfect for any design</span></li>
                                <li class="next"><a href="#">Next  <i class="icon-arrow-right icons"></i></a> <span>Cocooil - Review</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_comment_form">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="comments_box">
                            <h3>02 Comments	</h3>
                            <div class="comment_list d-flex">
                                <div class="comment_thumb">
                                    <img src="{{Asset('frontend/assets/img/blog/post-comment1.png')}}" alt="">
                                </div>
                                <div class="comment_content border-top">
                                    <div class="comment_meta d-flex align-items-center">
                                        <h5><a href="#">Justin Bieber </a></h5>
                                        <span> - Aug 26 2020 at 15 hours ago</span>
                                    </div>
                                    <p>Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla.Sed a dolor sit amrt paremi quam. terdum.</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list d-flex">
                                <div class="comment_thumb">
                               
                                    <img src="{{Asset('frontend/assets/img/blog/post-comment2.png')}}" alt="">
                                </div>
                                <div class="comment_content border-top">
                                    <div class="comment_meta d-flex align-items-center">
                                        <h5><a href="#">Selena Gomes </a></h5>
                                        <span> - Aug 26 2020 at 15 hours ago</span>
                                    </div>
                                    <p>Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla.Sed a dolor sit amrt paremi quam. terdum.</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a comment </h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input placeholder="Name *" type="text">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input placeholder="Email *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <input placeholder="Subject (optional)" type="text">
                                    </div>
                                    <div class="col-12">
                                        <textarea placeholder="Message"></textarea>
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit">Post Comment</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->

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
