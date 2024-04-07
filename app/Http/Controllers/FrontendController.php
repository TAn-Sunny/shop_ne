<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = product::select('name','material','price_nomal','price_sale','image') -> get();
        return view('frontend.home',[
            'products' => $products 
        ]);
    }
}
