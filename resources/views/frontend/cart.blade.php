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
                                <li class="menu-item-has-children">
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
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="#">pages</a></li>
                        </ul>
                        <h3>Shopping Cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

     <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="cart_page_inner mb-60">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart_page_tabel">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>product </th>
                                            <th>information</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="{{Asset('frontend/assets/img/product/product4.jpg')}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4>Example With Title Product</h4>
                                                    <ul>
                                                        <li><i class="ion-ios-arrow-right"></i> Color : <span>White</span></li>
                                                        <li><i class="ion-ios-arrow-right"></i> Size : <span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="{{Asset('frontend/assets/img/product/product6.jpg')}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4>Example With Title Product</h4>
                                                    <ul>
                                                        <li><i class="ion-ios-arrow-right"></i> Color : <span>White</span></li>
                                                        <li><i class="ion-ios-arrow-right"></i> Size : <span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_page_button border-top d-flex justify-content-between">
                                <div class="shopping_cart_btn">
                                    <a href="#" class="btn btn-primary border">CLEAR SHOPPING CART</a>
                                    <button class="btn btn-primary border" type="submit">UPDATE YOUR CART</button>
                                </div>
                                <div class="shopping_continue_btn">
                                    <button class="btn btn-primary" type="submit">CONTINUE SHOPPING</button>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="cart_page_bottom">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate top">
                                <h3 class="border-bottom">Calculate Shipping </h3>
                                <select class="select_option border">
                                    <option value="1">United Kingdom (UK)  </option>
                                    <option value="2">Åland Islands  </option>
                                    <option value="3">Afghanistan  </option>
                                    <option value="4">Belgium </option>
                                    <option value="5">Albania  </option>
                                </select>
                                <input class="border" placeholder="State / Country" type="text">
                                <input class="border" placeholder="Postcode / Zip" type="text">
                                <button class="btn btn-primary" type="submit">get a quote</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate">
                                <h3 class="border-bottom">Coupon Discount   </h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input class="border" placeholder="Enter your code" type="text">
                                <button class="btn btn-primary" type="submit">apply coupon</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="grand_totall_area">
                               <div class="grand_totall_inner border-bottom">
                                   <div class="cart_subtotal d-flex justify-content-between">
                                       <p>sub total </p>
                                       <span>$126.00</span>
                                   </div>
                                   <div class="cart_grandtotal d-flex justify-content-between">
                                       <p>grand total</p>
                                       <span>$126.00</span>
                                   </div>
                               </div>
                               <div class="proceed_checkout_btn">
                                   <a class="btn btn-primary" href="#">Proceed to Checkout</a>
                               </div>
                               <a href="#">Checkout with Mutilple Adresses</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
     <!--shopping cart area end -->


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
