<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        if(Auth::check() === true) {
            return view('product.create-product');
        }else{
            return view('auth.login');
        }
    }

    public function newProduct(Request $request){

            $product = new Product();

            $product->name = $request->input('productName');
            $product->description = $request->input('productDescription');
            $product->price = $request->input('productPrice');


            if($request->hasFile('productImage') && $request->file('productImage')->isValid()){
                $requestImage = $request->productImage;

                $extension = $request->productImage->extension();

                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;

                $request->productImage->storeAs('public/images/product', $imageName);

                $product->image = $imageName;

            }

            $product->save();

            return redirect('/');
    }
}
