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

    <!-- confirm area start -->
    <form action="/frontend/shop" method="POST">
    <div class="order-confirm p-to-top">
        <div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="row-flex" style="display: flex; align-items: center; margin-bottom: 10px;">
            <p>Xác nhận đơn hàng: <span style="font-weight: bold">Pạch Phương Pình</span></p>
        </div>
        <div class="row-flex" style="display: flex; align-items: center; margin-bottom: 10px;">
            <p>Đơn hàng của bạn đã được gửi <span style="font-weight: bold">thành công</span></p>
        </div>
        <br>
        <a class="main-btn" style="padding: 10px 20px; background-color: #555; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">Tiếp tục mua hàng</a>
    </div>
    </form>

    </div>
    <!-- confirm area end -->

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
