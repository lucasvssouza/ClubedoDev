<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index(){

        $products = Product::all();

        if(Auth::check() === true) {
            return view('product.list-product', ['products' => $products]);
        }else{
            return view('auth.login');
        }
    }
}
