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
use Illuminate\Support\Arr;

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
        $category = $product -> category;
        $related_p = product::where('category',$category) -> where('id','!=',$request -> id) -> latest() -> get();
        return view('frontend.product_details',compact('product','related_p'));
    }
    
<<<<<<< Updated upstream
   public function add_cart(Request $request){
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Bạn cần đăng nhập trước khi thêm sản phẩm vào giỏ hàng.');
=======
    public function add_cart(Request $request){
        $product_id = $request -> product_id;
        $product_quantity = $request -> product_quantity;
        if(is_null(Session::get('/frontend/cart'))){
            Session::put('/frontend/cart', [
                $product_id => $product_quantity
            ]);
            return redirect('/frontend/cart');
        }else{
            $cart = Session::get('/frontend/cart');
            if(Arr::exists($cart,$product_id)){
                $cart[$product_id] += $product_quantity;
                Session::put('/frontend/cart',$cart);
                return redirect('/frontend/cart');
            }else{
                $cart[$product_id] = $product_quantity;
                Session::put('/frontend/cart',$cart);
                return redirect('/frontend/cart');
            }
        }
>>>>>>> Stashed changes
    }
    
    // Kiểm tra và xử lý dữ liệu đầu vào
    $product_id = $request->input('product_id');
    if (!$product_id) {
        return redirect()->back()->with('error', 'Không tìm thấy sản phẩm.');
    }

    $user_id = Auth::user()->id;

    // Tìm hoặc tạo một mục giỏ hàng mới
    $cart = UserCart::where('user_id', $user_id)->where('product_id', $product_id)->first();
    if (!$cart) {
        $cart = new UserCart;
        $cart->user_id = $user_id;
        $cart->product_id = $product_id;
    }

    // Lưu mục giỏ hàng và thông báo kết quả
    $cart->save();
    return redirect('/frontend/cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng thành công.');
}

    
    
    public function show_cart(){
        $user_id = Auth::user()->id; // Lấy ID của người dùng hiện tại
        
        // Lấy tất cả các mục giỏ hàng của người dùng hiện tại từ cơ sở dữ liệu
        $cart_items = UserCart::where('user_id', $user_id)->with('product_id')-> get();
        dd($cart_items);
        // Tạo một mảng chứa thông tin sản phẩm trong giỏ hàng
        $products = [];
        
        // Duyệt qua từng mục giỏ hàng
        foreach ($cart_items as $item) {
            // Lấy thông tin sản phẩm từ mô hình UserCart qua mối quan hệ
            $product = $item->product;
            
            // Kiểm tra xem sản phẩm có tồn tại không
            if ($product) {
                $products[] = $product;
            }
        }
        
        // Trả về view '/frontend/cart' với thông tin sản phẩm và giỏ hàng
        return view('/frontend/cart', compact('products'));
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
        Notification::send("thienantang123@gmail.com", new EmailNotification("thienantang123@gmail.com") );
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
