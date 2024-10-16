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
            'Product_brand'=>'required|string',
            'product_description'=>'required',
            'product_image'=>'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);

        $product_image_name = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('images'), $product_image_name);

        $product = new product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->Product_brand =$request->Product_brand;
        $product->product_description = $request->product_description;
        $product->product_image = $product_image_name;
        $product->save();

        return redirect(route('productshow'));
    }




    public function Productshow(){
        $productshows = product::paginate(10);
        return view('productshow',compact('productshows'));
    }

    public function Productedite($id){
        $productedite = product::find($id);
        return view('productedites',compact('productedite'));
    }


    public function Edite(){
        return view('productedites');
    }


    public function Productupdate(Request $request, $id){
        $productupdate = product::find($id);
        if($productupdate){
            $dataupdate = $request->all();
            $productupdate->update($dataupdate);
            return redirect()->route('productshow')->with('Update','product update Successfull');
        }else{
            return redirect()->route('home');
        }
    }

    public function Update(Request $request, $id){
        $validation = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_brand' => 'required|string',
            'product_description' => 'required',
            'product_image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);



        $productupdate = Product::find($id);
        if (!$productupdate) {
            return back()->with('error', 'Product not found.');
        }

        if ($request->hasFile('product_image')) {
            $product_image_name = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('images'), $product_image_name);
            $productupdate->product_image = $product_image_name;
        }
        $productupdate->product_name = $request->product_name;
        $productupdate->product_price = $request->product_price;
        $productupdate->Product_brand = $request->product_brand;
        $productupdate->product_description = $request->product_description;
        $productupdate->update();

        return redirect()->route('productshow')->with('success', 'Product updated successfully.');
    }

    public function Delete($id){
        $productdelete = Product::find($id);

        if ($productdelete) {
            $productdelete->delete();
            return redirect()->route('productshow')->with('success', 'Product deleted successfully');
        } else {
            return redirect()->route('productshow')->with('error', 'Error deleting product');
        }
    }
}
