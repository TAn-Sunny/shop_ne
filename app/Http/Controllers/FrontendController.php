<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = product::all();
        return view('frontend.shop',[
            'products' => $products
        ]);
    }
}
