<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function index(){
//        return view('home');
//    }
    private static $products;
    public function index(){
        self::$products = Product::all();
        return view('home',['products'=>self::$products]);
    }
}
