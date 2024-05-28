<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAppController extends Controller
{
    //
    public function index()
    {
        $products = Product::latest()->paginate(7);
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required| numeric',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $imageName = time() . "." . $request->image->extension();
        $request->image->move(public_path('pictures'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->save();
        return back()->withSuccess('Product Successfully Added...');
    }

    public function view($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.view', ['product' => $product]);
    }
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required| numeric',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);

        $products = Product::where('id', $id)->first();
        if (isset($request->image)) {
            $imageName = time() . "." . $request->image->extension();
            $request->image->move(public_path('pictures'), $imageName);
            $products->image = $imageName;
        }
        $products->name = $request->name;
        $products->mrp = $request->mrp;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->save();
        return back()->withSuccess('Product Updated Successfully...');

    }

    public function delete($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted Successfully...');
    }

}
