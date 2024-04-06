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
                                <li class="menu-item-has-children">
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
                        <h3>checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_section" id="accordion">
       <div class="container">
            <div class="returning_coupon_area">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login" aria-expanded="true">Click here to login</a>

                            </h3>
                             <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password  <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Have a Coupon ?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon2" aria-expanded="true">Click here to enter your code</a>

                            </h3>
                             <div id="checkout_coupon2" class="collapse" data-parent="#accordion">
                                <div class="checkout_info coupon_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <button class="btn btn-primary" type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="checkout_form_input">
                                <label for="country">country <span>*</span></label>
                                    <select class="select_option" name="cuntry" id="country">
                                    <option value="2">United Kingdom (UK)  </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name  <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                               <label>Address  <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Email Address   <span>*</span></label>
                                <input  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Phone <span>*</span></label>
                                <input  type="text">
                            </div>
                            <p class="different_address"><i class="ion-android-checkbox-outline"></i> Ship to a different address?</p>
                            <div class="checkout_form_input">
                                <label for="country2">country <span>*</span></label>
                                    <select class="select_option" name="cuntry" id="country2">
                                    <option value="2">United Kingdom (UK)  </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name  <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Order Notes</label>
                                <textarea></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="order_table_right">
                            <form action="#">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Slim Collarless Blaze   </td>
                                                <td class="text-right"> $75.20  </td>
                                            </tr>
                                            <tr>
                                                <td> Denim Kimono Jacket     </td>
                                                <td class="text-right"> $50.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Cart Subtotal  </td>
                                                <td class="text-right">$225.60</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td class="text-right">$225.60</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment1" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>

                                        <label for="payment1" data-toggle="collapse" data-target="#panel1" >direct bank transfer</label>
                                        <div id="panel1" class="collapse show one" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment2" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment2" data-toggle="collapse" data-target="#method2" >cheque payment</label>
                                        <div id="method2" class="collapse two" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment3" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment3" data-toggle="collapse" data-target="#method3" >cash on delivery</label>
                                        <div id="method3" class="collapse three" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment4" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment4" data-toggle="collapse" data-target="#method4" >Paypal</label>
                                        <div id="method4" class="collapse four" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place_order_btn">
                                   <a class="btn btn-primary" href="#">place order</a>
                               </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->

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
