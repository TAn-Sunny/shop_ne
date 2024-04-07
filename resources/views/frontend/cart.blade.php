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
    <form action="">
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
                                        @php 
                                            $total = 0;
                                        @endphp
                                        @foreach($products as $product)
                                            @php 
                                                $price = $product -> price_sale * Session::get('/frontend/cart')[$product -> id];
                                                $total += $price;
                                            @endphp
                                            <tr class="border-top">
                                                <td>
                                                    <div class="cart_product_thumb">
                                                        <img src="{{Asset($product -> image)}}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart_product_text">
                                                        <h4>{{($product -> name)}}</h4>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart_product_price">
                                                        <span>${{($product -> price_sale)}}</span>
                                                    </div>
                                                </td>
                                                <td class="product_quantity">
                                                    <div class="cart_product_quantity">
                                                        <input onKeyDown="return false" name="product_id[{{$product -> id}}]" type="number" value="{{Session::get('/frontend/cart')[$product -> id]}}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart_product_price">
                                                        <span>${{($price)}}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart_product_remove text-right">
                                                        <a href="/frontend/cart/delete/{{$product -> id}}"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
                                   
                                   <div class="cart_grandtotal d-flex justify-content-between">
                                       <p> Total</p>
                                       <span>${{$total}}</span>
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
    </form>
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
