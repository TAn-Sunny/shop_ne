<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
    }

    public function show_cart(){
        $cart = Session::get('/frontend/cart');
        $product_id = array_keys($cart);
        $products = product::whereIn('id', $product_id ) -> get();
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
        return redirect('/order/confirm');

    }

    public function getSearch(Request $request){
       $product = product::where('name','like','%'.$request->key.'%') -> get();
       return view('frontend.search',compact('product'));
    }
}
