<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        if(Auth::check() === true) {
            return view('product.edit-product', ['product' => $product]);
        }else{
            return view('auth.login');
        }
    }

    public function editProduct(Request $request){

        $productID = $request->input('productID');
        $productImageHidden = $request->input('productImageHidden');
        $productName = $request->input('productName');
        $productDescription = $request->input('productDescription');
        $productPrice = $request->input('productPrice');

        $product = Product::find($productID);
        $product->name = $productName;
        $product->description = $productDescription;
        $product->price = $productPrice;


        if($request->hasFile('productImage') && $request->file('productImage')->isValid()){
            $requestImage = $request->productImage;

            $extension = $request->productImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;

            $request->productImage->storeAs('public/images/product', $imageName);

            $product->image = $imageName;

        }else{
            $product->image = $productImageHidden;
        }

        $product->save();

            return redirect('/');
        
    }


}
