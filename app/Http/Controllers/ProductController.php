<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function Product(){
        return view('product');
    }

    public function Productpost(Request $request){
        $valiation = $request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_brand'=>'required|string',
            'product_description'=>'required',
            'product_image'=>'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);

        $product_image_name = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('images'), $product_image_name);

        $product = new product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_brand =$request->product_brand;
        $product->product_description = $request->product_description;
        $product->product_image = $product_image_name;
        $product->save();

        return redirect(route('productshow'));
    }




    public function Productshow(){
        $productshows = product::paginate(10);
        return view('productshow',compact('productshows'));
    }
}
