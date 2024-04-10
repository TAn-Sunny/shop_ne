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
    <div class="breadcrumbs_area breadcrumbs_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="shop.html">shop</a></li>
                            <li>Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <section class="product_details mb-135">
        <form action="/frontend/cart/add" method="post">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product_zoom_gallery">
                        <div class="zoom_gallery_inner d-flex">
                            <div class="zoom_tab_img">
                                @php 
                                        $product_images = explode('*', $product -> images);
                                @endphp
                                    @foreach ($product_images as $product_image)
                                    <a class="zoom_tabimg_list" href="javascript:void(0)"><img src="{{Asset($product_image)}}" alt="tab-thumb"></a>
                                    @endforeach
                            </div>
                            <div class="product_zoom_main_img">
                                    @foreach ($product_images as $product_image)
                                    <div class="product_zoom_thumb">
                                        <img data-image="assets/img/product/big-product/product1.png" src="{{Asset($product_image)}}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product_d_right">
                                <h1>{{$product -> name}}</h1>
                                <div class="product_desc">
                                    <p>{{$product -> material}}</p>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">${{$product -> price_sale}}</span>
                                    <span class="old_price">${{$product -> price_nomal}}</span>
                                </div>
                                <div class="product_desc">
                                    <p>{!!$product -> description!!}</p>
                                </div>
                                <div class="product_variant">
                                    <div class="variant_quantity_btn d-flex">
                                        <div class="pro-qty border">
                                            <input onkeydown="return false" type="number" value="1" name="product_quantity">
                                            <input type="hidden" value="{{$product -> id}}"  name="product_id">
                                        </div>
                                        <button class="button btn btn-primary" type="submit"></i>Add To Cart</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        @csrf
        </form>
    </section>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button border-bottom">
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Product Description</a>
                                </li>
                               

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    <p>{!!$product -> content!!}</p>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title mb-50">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class=" product_slick slick_slider_activation" data-slick='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "arrows": true,
                    "dots": false,
                    "autoplay": false,
                    "speed": 300,
                    "infinite": true,
                    "responsive":[
                      {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                      {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                      {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                     ]
                }'>
                    @foreach ($related_p as $product)
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="/frontend/product_details/{{$product -> id}}" >
                                        <img class="primary_img" src="{{Asset($product -> image)}}" alt="consectetur">
                                    </a>
                                  
                                </div>
                                <figcaption class="product_content text-center">
                                    
                                    <h4 class="product_name"><a href="/frontend/product_details/{{$product -> id}}">{{$product -> name}}</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">${{$product -> price_nomal}}</span>
                                        <span class="old_price">${{$product -> sale}}</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="/frontend/product_details/{{$product -> id}}" data-tippy="View detail"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">View</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
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
