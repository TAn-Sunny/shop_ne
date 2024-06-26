<header class="header_section border-bottom">
    <div class="main_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header_container d-flex justify-content-between align-items-center">
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                        <div class="header_logo">
                            <a class="sticky_none" href="{{Asset('frontend/home')}}"><img src="{{Asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a href="{{Asset('frontend/home')}}">Home</a> </li>
                                    <li><a href="{{Asset('frontend/shop')}}">Shop</a> </li>
            

                                    <li><a href="{{Asset('frontend/blog')}}">blog</a>
                                        <ul class="sub_menu">
                                            <li><a href="{{Asset('frontend/blog')}}">Blog Pages</a></li>
                                            <li><a href="{{Asset('frontend/blog-details')}}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header_account">
                            <ul class="d-flex">
                                <li class="header_search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                <li class="account_link">
                                @if (Auth::check())
                                    <a href="#"><i class="icon-user icons"></i><span style="font-size: 14px;">   </span><span style="font-size: 18px;">Hello, {{ Auth::user()->name }}</span></a>
                                @else
                                    <a href="#"><i class="icon-user icons"></i></a>
                                @endif
                                <ul class="dropdown_account_link">
                                    
                                    @if (Auth::check())
                                        <li><a href="/logout">Logout</a></li>
                                    @else
                                        <li><a href="/login">Login</a></li>
                                    @endif
                                </ul>
                                </li>
                                <li><a href="#"><i class="icon-heart icons"></i></a> <span class="item_count">0</span></li>
                                <li class="shopping_cart"><a href="#"><i class="icon-basket-loaded icons"></i></a> <span class="item_count">0</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="{{route('search')}}" method="get">
            <input class="border-0" placeholder="Search products..." type="text" name="key">
            <button type="submit"><span class="icon-magnifier icons"></span></button>
        </form>
    </div>
</header>
