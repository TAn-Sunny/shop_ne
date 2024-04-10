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
        $product_id = $request->product_id;
        $quantity = $request->product_quantity; // Lấy số lượng từ yêu cầu
        
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if(Auth::check()) {
            // Nếu đã đăng nhập, lấy ID của người dùng hiện tại
            $user_id = Auth::user()->id;
            
            // Tìm giỏ hàng của người dùng hiện tại
            $cart = UserCart::where('user_id', $user_id)->where('product_id', $product_id)->first();
        
            if (!$cart) {
                // Nếu không, tạo một giỏ hàng mới
                $cart = new UserCart;
                $cart->user_id = $user_id;
                $cart->product_id = $product_id;
                $cart->quantity = $quantity;
            } else {
                // Nếu có, cập nhật số lượng sản phẩm
                $cart->quantity += $quantity;
            }
        
            $cart->save();
        } else {
            // Nếu chưa đăng nhập, lưu thông tin sản phẩm vào session
            $cart = Session::get('cart', []);
            
            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
            if(isset($cart[$product_id])) {
                // Nếu đã tồn tại, cập nhật số lượng
                $cart[$product_id] += $quantity;
            } else {
                // Nếu chưa tồn tại, thêm mới sản phẩm vào giỏ hàng
                $cart[$product_id] = $quantity;
            }
            
            // Lưu lại giỏ hàng vào session
            Session::put('cart', $cart);
        }
    
        return redirect('/frontend/cart');
    }
    
    

    
    public function show_cart(){
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if(Auth::check()) {
            $user_id = Auth::user()->id; // Lấy ID của người dùng hiện tại
    
            // Lấy tất cả các mục giỏ hàng của người dùng hiện tại
            $cart_items = UserCart::where('user_id', $user_id)->get();
    
            // Lấy thông tin sản phẩm và số lượng cho mỗi mục giỏ hàng
            $products = [];
            foreach ($cart_items as $item) {
                $product = Product::find($item->product_id);
                $product->quantity = $item->quantity; // Add quantity to product object
                $products[] = $product;
            }
        } else {
            // Nếu chưa đăng nhập, lấy thông tin giỏ hàng từ session
            $cart = Session::get('cart', []);
            
            // Lấy thông tin sản phẩm từ session giỏ hàng
            $products = [];
            foreach ($cart as $product_id => $quantity) {
                $product = Product::find($product_id);
                if ($product) {
                    $product->quantity = $quantity; // Add quantity to product object
                    $products[] = $product;
                }
            }
        }
    
        return view('/frontend/cart',[
            'products' => $products
        ]);
    }
    
    

    public function delete_cart(Request $request){
        $product_id = $request -> id;
        $user_id = Auth::user()->id; // Lấy ID của người dùng hiện tại
    
        // Tìm sản phẩm trong giỏ hàng của người dùng hiện tại
        $cart_item = UserCart::where('user_id', $user_id)->where('product_id', $product_id)->first();
    
        if ($cart_item) {
            // Nếu tìm thấy, xóa sản phẩm khỏi giỏ hàng
            $cart_item->delete();
        }
    
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
    public function update_cart(Request $request){
        $product_id = $request -> product_id;
        $newQuantity = $request -> quantity;
        $user_id = Auth::user()->id; // Lấy ID của người dùng hiện tại
    
        // Tìm giỏ hàng của người dùng hiện tại
        $cart = UserCart::where('user_id', $user_id)->where('product_id', $product_id)->first();
    
        if ($cart) {
            // Nếu có, cập nhật số lượng sản phẩm
            $cart->quantity = $newQuantity;
            $cart->save();
        }
    
        // Chuyển hướng người dùng về trang giỏ hàng
        return redirect('/frontend/cart');
    }
    
    
    public function getSearch(Request $request){
       $product = product::where('name','like','%'.$request->key.'%') -> get();
       return view('frontend.search',compact('product'));
    }
}
