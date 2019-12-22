<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;

class ProductsController extends Controller
{
    public function categ(){
       
        return view('products');
    }
    public function panel(){

        if(Auth::user()->role_id==1){
            $products = Product::all();
            return view('panel.main')->with('products', $products);
        }
        return redirect()->back();

    	
    }
    public function store(Request $request)
    {

        $image = $request->image;
        $newname = time().'.'.$image->getClientOriginalName();
        $folder = public_path('/products');
        $image->move($folder, $newname);

       
        $product = new Product;
        $product->pname = $request->pname;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->image = $newname;
        $product->save();
        
        return redirect()->back();
       

    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('panel.productupdate')->with('product', $product);
    }
    public function update(Request $request, $id)
    {
      
        
        
        $product = Product::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $newname = time().'.'.$image->getClientOriginalExtension();
            $folder = public_path('/products');
            $image->move($folder, $newname);
            $product->image = $newname;
        }
       

        $product->pname = $request->pname;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        
        // dd($request->all());
        $product->save();
        
        return redirect()->back();
        
    }

}
