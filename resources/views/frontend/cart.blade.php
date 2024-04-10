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
                            <li><a href="/frontend/home">home</a></li>
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
            <form action="/frontend/checkout/send" method="POST">

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
                                    $quantity = $product->quantity; // Lấy số lượng sản phẩm từ giỏ hàng
                                    $price = $product->price_sale * $quantity;
                                    $total += $price;
                                @endphp

                                <tr class="border-top">
                                    <td>
                                        <div class="cart_product_thumb">
                                            <img src="{{ asset($product->image) }}" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart_product_text">
                                            <h4>{{ $product->name }}</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart_product_price">
                                            <span>${{ $product->price_sale }}</span>
                                        </div>
                                    </td>
                                    <td class="product_quantity">                                      
                                        <input class="quantity-input" type="number" min="1" value="{{ $quantity }}" name="quantity">
                                        <input type="hidden" value="{{ $product->id }}"  name="product_id">                                               
                                    </td>
                                    <td>
                                        <div class="cart_product_price">
                                            <span>${{ $price }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart_product_remove text-right">
                                            <a href="/frontend/cart/delete/{{ $product->id }}"><i class="ion-android-close"></i></a>
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
                               <div class="border-bottom">
                                   <div class="cart_grandtotal d-flex justify-content-between">
                                       <p> Total</p>
                                       <span>${{$total}}</span>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--coupon code area end-->
             

                <!-- checkout -->
                <div class="checkout_section" id="accordion" style="margin-top: 50px;">
                    <div class="container">
                        <div class="checkout_form">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">

                                    <!-- <input type="hidden" name="_token" value='{{csrf_token()}}'> -->
                                    <h3 style="font-size: 25px;"><strong>Thông tin giao hàng</strong></h3>
                                    <div class="checkout_form_input">
                                        <label>Họ và tên <span>*</span></label>
                                        <input name="name" type="text">
                                    </div>
                                    <div class="checkout_form_input">
                                        <label> Điện thoại <span>*</span></label>
                                        <input name="phone" type="text">
                                    </div>
                                    <div class="checkout_form_input">
                                        <label> Email <span>*</span></label>
                                        <input name="email" type="text">
                                    </div>
                                    <div class="checkout_form_input">
                                        <label for="tinhthanh"> Tỉnh thành <span>*</span></label>
                                        <select class="select_option" name="city" id="tinhthanh">
                                            <option value="">Chọn tỉnh/thành phố</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                            <option value="Hải Dương">Hải Dương</option>
                                            <option value="Bắc Giang">Bắc Giang</option>
                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                            <option value="Hà Nam">Hà Nam</option>
                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                            <option value="Nghệ An">Nghệ An</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Thái Bình">Thái Bình</option>
                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                            <option value="Nghệ An">Nghệ An</option>
                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                            <option value="Hà Giang">Hà Giang</option>
                                            <option value="Tuyên Quang">Tuyên Quang</option>
                                            <option value="Lào Cai">Lào Cai</option>
                                            <option value="Điện Biên">Điện Biên</option>
                                            <option value="Lai Châu">Lai Châu</option>
                                            <option value="Sơn La">Sơn La</option>
                                            <option value="Yên Bái">Yên Bái</option>
                                            <option value="Phú Thọ">Phú Thọ</option>
                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                            <option value="Cao Bằng">Cao Bằng</option>
                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                            <option value="Quảng Bình">Quảng Bình</option>
                                            <option value="Quảng Trị">Quảng Trị</option>
                                            <option value="Huế">Huế</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                            <option value="Kon Tum">Kon Tum</option>
                                            <option value="Gia Lai">Gia Lai</option>
                                            <option value="Đắk Lắk">Đắk Lắk</option>
                                            <option value="Đắk Nông">Đắk Nông</option>
                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                            <option value="Bình Thuận">Bình Thuận</option>
                                            <option value="Tây Ninh">Tây Ninh</option>
                                            <option value="Bình Định">Bình Định</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                            <option value="Bình Phước">Bình Phước</option>
                                            <option value="Bình Dương">Bình Dương</option>
                                            <option value="Đồng Nai">Đồng Nai</option>
                                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                            <option value="Long An">Long An</option>
                                            <option value="Tiền Giang">Tiền Giang</option>
                                            <option value="Bến Tre">Bến Tre</option>
                                            <option value="Trà Vinh">Trà Vinh</option>
                                            <option value="Vĩnh Long">Vĩnh Long</option>
                                            <option value="Đồng Tháp">Đồng Tháp</option>
                                            <option value="An Giang">An Giang</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                            <option value="Hậu Giang">Hậu Giang</option>
                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                            <option value="Bình Phước">Bình Phước</option>
                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                        </select>
                                    </div>
                                    <div class="checkout_form_input">
                                        <label> Địa chỉ cụ thể (xã/phường, quận/huyện,...) <span>*</span></label>
                                        <input name="address" type="text">
                                    </div>
                                    <div class="checkout_form_input">
                                        <label>Ghi chú</label>
                                        <input name="note" type="text">
                                    </div>
                                    <!-- <div class="place_order_btn"> -->
                                    <button class="btn btn-primary">Gửi đơn hàng</button>
                                    <!-- </div> -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>


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