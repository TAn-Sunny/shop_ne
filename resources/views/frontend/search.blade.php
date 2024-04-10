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
                                            <li><a href="/frontend/search?key=women"> Shirt </a></li>
                                            <li><a href="/frontend/search?key=dress">Dress </a></li>
                                            <li><a href="#">Set</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)" data-toggle="collapse" data-target="#accessories">accessories</a>
                                        <ul class="widget_dropdown_categories collapse" id="accessories">
                                            <li><a href="/frontend/search?key=bag"> Bag</a></li>
                                            <li><a href="/frontend/search?key=neck">Necktie</a></li>
                                            <li><a href="#">Scarf</a></li>
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
                            <p>{{count($product)}} Products Found</p>
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
                    @foreach($product as $new)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb ">
                                        <a href="/frontend/product_details/{{$new -> id}}">
                                            <img class="primary_img" src="{{Asset($new -> image)}}" alt="consectetur">
                                        </a>
                                        <div class="product_action">
                                          
                                        </div>
                                    </div>
                                    <figcaption class="product_content text-center">
                                        <h4 class="product_name"><a href="/frontend/product-details/{{$new -> id}}">{{$new -> name}}</a></h4>
                                        <span>
                                            <p>{{$new -> material}}</p>
                                                </span>
                                        <div class="price_box">
                                            <span class="current_price">{{$new -> price_sale}}</span>
                                            <span class="old_price">{{$new -> price_nomal}}</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Add To Cart
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure> 
                        </article>
                    </div>
                     @endforeach
                </div>


                    <div class="pagination_style pagination justify-content-center">
                        <ul class="d-flex">
                            <li><a href="#"> << </a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="current" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">>></a></li>
                        </div>
                        </ul>
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
