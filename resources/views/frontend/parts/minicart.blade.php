<div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="icon-close icons"></i></a>
                </div>
            </div>
            
         
        </div>
        <form action="/frontend/cart/add" method="post">
        <div class="mini_cart_footer">
           <div class="cart_button">
                <a href="/frontend/cart"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="/frontend/checkout"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
        @csrf
        </form>
        
</div>