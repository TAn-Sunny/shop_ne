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
                <!-- <div class="returning_coupon_area">
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
                </div> -->
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <form action="/frontend/checkout/send" method="POST">
                                <!-- <input type="hidden" name="_token" value='{{csrf_token()}}'> -->
                                <h3>Thông tin giao hàng</h3>
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
                                    <label> Địa chỉ cụ thể (số nhà/đường, phường/xã, quận/huyện,...)  <span>*</span></label>
                                    <input name="address" type="text">
                                </div>
                                <div class="checkout_form_input">
                                    <label>Ghi chú</label>
                                    <input name="note" type="text">
                                </div>
                                <!-- <div class="place_order_btn"> -->
                                <button class="btn btn-primary">Gửi đơn hàng</button>
                                <!-- </div> -->
                                @csrf
                            </form>
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
