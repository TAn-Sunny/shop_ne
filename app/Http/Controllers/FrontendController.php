<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCart;

// namespace App\Mail;
// use App\Mail\TestMail;

class FrontendController extends Controller
{
    public function index(){
        $products = product::select('id','name','material','price_nomal','price_sale','image') -> get();
        return view('frontend.home',[
            'products' => $products
        ]);
    }

    public function shop(){
        $products = product::select('id','name','material','price_nomal','price_sale','image') -> get();
        return view('frontend.shop',[
            'products' => $products
        ]);
    }

    public function show_product(Request $request){
        $product = product::find($request -> id);
        return view('frontend.product_details',[
            'product' => $product
        ]);
    }
    
    public function add_cart(Request $request){
        $product_id = $request -> product_id;
        $user_id = Auth::user()->id; // Lấy ID của người dùng hiện tại
    
        // Tìm giỏ hàng của người dùng hiện tại
        $cart = UserCart::where('user_id', $user_id)->where('product_id', $product_id)->first();
    
        if (!$cart) {
            // Nếu không, tạo một giỏ hàng mới
            $cart = new UserCart;
            $cart->user_id = $user_id;
            $cart->product_id = $product_id;
        }
    
        $cart->save();
    
        return redirect('/frontend/cart');
    }
    
    public function show_cart(){
        $user_id = Auth::user()->id; // Lấy ID của người dùng hiện tại
    
        // Lấy tất cả các mục giỏ hàng của người dùng hiện tại
        $cart_items = UserCart::where('user_id', $user_id)->get();
    
        // Lấy thông tin sản phẩm cho mỗi mục giỏ hàng
        $products = [];
        foreach ($cart_items as $item) {
            $product = Product::find($item->product_id);
            $products[] = $product;
        }
    
        return view('/frontend/cart',[
            'products' => $products
        ]);
    }
    

    public function delete_cart(Request $request){
        $cart = Session::get('/frontend/cart');
        $product_id = $request -> id;
        unset($cart[$product_id]);
        Session::put('/frontend/cart', $cart);
        return redirect('/frontend/cart');
    }
    public function send_cart(Request $request){
        $token = Str::random(12);
        $order = new order;
        $order -> name = $request -> input('name');
        $order -> phone = $request -> input('phone');
        $order -> email = $request -> input('email');
        $order -> city = $request -> input('city');
        $order -> address = $request -> input('address');
        $order -> note = $request -> input('note');
        $order_detail = json_encode($request -> input('product_id'));
        $order -> order_detail = $order_detail;
        $order -> token = $request -> $token;
        $order -> save();
        Session::flush('card');
        $mail_info = $order -> email;
        $name_info = $order -> name;
        $Mail = Mail::to($mail_info) -> send(new TestMail($name_info));
        Notification::send($order, new EmailNotification($order) );
        return redirect('/order/confirm');

    }

    public function getSearch(Request $request){
       $product = product::where('name','like','%'.$request->key.'%') -> get();
       return view('frontend.search',compact('product'));
    }
}
