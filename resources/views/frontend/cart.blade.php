<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('frontend.parts.head')
</head>

<body>

    <!--offcanvas menu area start-->
    
    <!--mini cart-->
    @include('frontend.parts.minicart')
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
                           
                         </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="cart_page_bottom">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-8">
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
                                   <a class="btn btn-primary" href="checkout.html">Proceed to Checkout</a>
                               
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
