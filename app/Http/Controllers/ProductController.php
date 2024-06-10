<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::oldest()->paginate(5);

        return view('index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'productType' => 'required|in:Makanan Berat,Sambal,Minuman,Gorengan',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'isRecommended' => 'nullable'
        ]);

        $path = NULL;
        $filename = NULL;

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'product-image/images/';
            $file->move($path, $filename);
        }

        //create new product
        Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'productType' => $request->productType,
            'image' => $path.$filename,
            'isRecommended' => $request->has('isRecommended')
        ]);

        //redirect user
        return redirect()->route('products.index')->with('success', 'Produk telah dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'productType' => 'required|in:Makanan Berat,Sambal,Minuman,Gorengan',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'isRecommended' => 'nullable'
        ]);

        $path = NULL;
        $filename = NULL;
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'public/images/';
            $file->move($path, $filename);

            if(File::exists($product->image)){
                File::delete($product->image);
            }
        }

        //create new product
        $product->update([
            'name' => $request->name,
            'detail' => $request->detail,
            'productType' => $request->productType,
            'image' => $path.$filename,
            'isRecommended' => $request->has(key:'isRecommended')
        ]);

        //redirect user
        return redirect()->route('products.index')->with('success', 'Produk telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //delete product
        $product->delete();

        if(File::exists($product->image)){
            File::delete($product->image);
        }

        //redirect and display success
        return redirect()->route('products.index')->with('success', 'Produk telah dihapus!');
    }
}
