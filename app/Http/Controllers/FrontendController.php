<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

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
                $cart[$product_id] = $cart[$product_id] + $product_quantity;
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


    public function delete_cart(){
        
    }
}
