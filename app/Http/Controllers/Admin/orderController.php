<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function list_order(){
        $orders = order::all();
        return view('admin.order.list',[
            'order' => $orders
        ]);
    }
    public function detail_order(Request $request){
        $order_detail = json_decode($request -> order_detail, true);
        $prouduct_id = arr.keys()($order_detail);
        $products = product::whereIn('id', $prouduct_id -> get());
        return view('admin.order.detail',[
            'products' => $products,
            'order_detail'  => $order_detail
        ]);
    }

}
