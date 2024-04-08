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
                                        <option value="">Chọn tỉnh thành</option>
                                        <option value="1">Hà Nội</option>
                                        <option value="2">Hồ Chí Minh</option>
                                        <option value="3">Hải Phòng</option>
                                        <option value="4">Đà Nẵng</option>
                                        <option value="5">Cần Thơ</option>
                                        <option value="6">Hải Dương</option>
                                        <option value="7">Bắc Giang</option>
                                        <option value="8">Bắc Ninh</option>
                                        <option value="9">Hà Nam</option>
                                        <option value="10">Hà Tĩnh</option>
                                        <option value="11">Nghệ An</option>
                                        <option value="12">Quảng Ninh</option>
                                        <option value="13">Thái Bình</option>
                                        <option value="14">Thái Nguyên</option>
                                        <option value="15">Vĩnh Phúc</option>
                                        <option value="16">Hà Giang</option>
                                        <option value="17">Tuyên Quang</option>
                                        <option value="18">Lào Cai</option>
                                        <option value="19">Điện Biên</option>
                                        <option value="20">Lai Châu</option>
                                        <option value="21">Sơn La</option>
                                        <option value="22">Yên Bái</option>
                                        <option value="23">Phú Thọ</option>
                                        <option value="24">Bắc Kạn</option>
                                        <option value="25">Cao Bằng</option>
                                        <option value="26">Lạng Sơn</option>
                                        <option value="27">Tuyên Quang</option>
                                        <option value="28">Quảng Bình</option>
                                        <option value="29">Quảng Trị</option>
                                        <option value="30">Huế</option>
                                        <option value="31">Quảng Nam</option>
                                        <option value="32">Quảng Ngãi</option>
                                        <option value="33">Kon Tum</option>
                                        <option value="34">Gia Lai</option>
                                        <option value="35">Đắk Lắk</option>
                                        <option value="36">Đắk Nông</option>
                                        <option value="37">Khánh Hòa</option>
                                        <option value="38">Ninh Thuận</option>
                                        <option value="39">Bình Thuận</option>
                                        <option value="40">Tây Ninh</option>
                                        <option value="41">Bình Định</option>
                                        <option value="42">Phú Yên</option>
                                        <option value="43">Khánh Hòa</option>
                                        <option value="44">Bình Phước</option>
                                        <option value="45">Bình Dương</option>
                                        <option value="46">Đồng Nai</option>
                                        <option value="47">Bà Rịa - Vũng Tàu</option>
                                        <option value="48">Long An</option>
                                        <option value="49">Tiền Giang</option>
                                        <option value="50">Bến Tre</option>
                                        <option value="51">Trà Vinh</option>
                                        <option value="52">Vĩnh Long</option>
                                        <option value="53">Đồng Tháp</option>
                                        <option value="54">An Giang</option>
                                        <option value="55">Kiên Giang</option>
                                        <option value="56">Cần Thơ</option>
                                        <option value="57">Hậu Giang</option>
                                        <option value="58">Sóc Trăng</option>
                                        <option value="59">Bạc Liêu</option>
                                        <option value="60">Cà Mau</option>
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
