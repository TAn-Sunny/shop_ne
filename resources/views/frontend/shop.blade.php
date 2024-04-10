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

    <!--shop  area start-->
    <div class="shop_section shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h2>Categories</h2>
                                <ul>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse" data-target="#men">Men</a>
                                            <ul class="widget_dropdown_categories collapse show" id="men">
                                                <li><a href="/frontend/search?key=Men">Shirt</a></li>
                                                <li><a href="/frontend/search?key=Pant">Pants </a></li>
                                                <li><a href="/frontend/search?key=Set">Set</a></li>
                                            </ul>
                                    </li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse" data-target="#women">women</a>
                                        <ul class="widget_dropdown_categories collapse" id="women">
                                            <li><a href="#"> New products <span>104</span></a></li>
                                            <li><a href="#">Gymwear <span>68</span></a></li>
                                            <li><a href="#">Jakets <span>75</span></a></li>
                                            <li><a href="#">Jeans <span>30</span></a></li>
                                            <li><a href="#">Shirts <span>150</span></a></li>
                                            <li><a href="#">T-Shirts <span>113</span></a></li>
                                            <li><a href="#">Accessories <span>95</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse" data-target="#accessories">accessories</a>
                                        <ul class="widget_dropdown_categories collapse" id="accessories">
                                            <li><a href="#"> New products <span>104</span></a></li>
                                            <li><a href="#">Gymwear <span>68</span></a></li>
                                            <li><a href="#">Jakets <span>75</span></a></li>
                                            <li><a href="#">Jeans <span>30</span></a></li>
                                            <li><a href="#">Shirts <span>150</span></a></li>
                                            <li><a href="#">T-Shirts <span>113</span></a></li>
                                            <li><a href="#">Accessories <span>95</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->

                    <!--breadcrumbs area start-->
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                    <!--breadcrumbs area end-->

                    <div class="shop_banner d-flex align-items-center" data-bgimg="{{Asset('frontend/assets/img/bg/shop_bg.jpg')}}">
                        <div class="shop_banner_text">
                            <h2>essential <br> wears</h2>
                            <p>The collections basic items <br> essential for all girls</p>
                        </div>
                    </div>

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper d-flex justify-content-between align-items-center">
                        <div class="page_amount">
                            <p> Products </p>
                        </div>

                        <div class="toolbar_btn_wrapper d-flex align-items-center">
                            <div class="view_btn">
                                <a class="view" href="#">VIEW</a>
                            </div>
                            <div class="shop_toolbar_btn">
                                <ul class="d-flex align-items-center">
                                    <li><a href="#" class="active btn-grid-3" data-role="grid_3" data-tippy="3"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-grid"></i></a></li>

                                    <li><a href="#" class="btn-list" data-role="grid_list" data-tippy="List" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                <div class="row shop_wrapper">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb ">
                                        <a href="/frontend/product_details/{{$product -> id}}">
                                            <img class="primary_img" src="{{Asset($product -> image)}}" alt="consectetur">
                                        </a>
                                        <div class="product_action">
                                            <ul>
                                                <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-heart icons"></i></a></li>
                                                <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                        data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-placement="left"><i
                                                            class="icon-size-fullscreen icons"></i></a></li>
                                                <li class="compare"><a data-tippy="Compare" href="#"
                                                        data-tippy-inertia="true" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-placement="left"><i
                                                            class="icon-refresh icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <h4 class="product_name"><a href="/frontend/product_details/{{$product -> id}}">{{$product -> name}}</a></h4>
                                        <span>
                                            <p>{{$product -> material}}</p>
                                                </span>
                                        <div class="price_box">
                                            <span class="current_price">${{$product -> price_sale}}</span>
                                            <span class="old_price">${{$product -> price_nomal}}</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="/frontend/product_details/{{$product -> id}}" data-tippy="View Detail"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">View
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure> 
                        </article>
                    </div>
                     @endforeach
                </div>


                   

            </div>
        </div>
    </div>
    <!--shop  area end-->

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
