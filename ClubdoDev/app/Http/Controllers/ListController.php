<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index(){
        if(Auth::check() === true){
            return view('product.list-product');
        }else{
            return view('auth.login');
        }
        
    }
}
