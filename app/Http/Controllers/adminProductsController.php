<?php

namespace App\Http\Controllers;

use App\adminCategory;
use App\adminProduct;
use Illuminate\Http\Request;

class adminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = adminProduct::all();

        return view('admin.products.index', compact('products'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = adminCategory::all();
        // dd($categories);

        return view('admin.products.create', compact('categories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'string|required',
            'product_description' => 'string|required',
            'img' => 'required|image',
            'category' => 'required|exists:categories,id'
        ]);

        $imageName = $request->file('img')->store('products');

        $products = new adminProduct([
            'product_name' => $data['product_name'],
            'product_description' => $data['product_description'],
            'img' => $imageName,
            'category_id' => $data['category'],
        ]);

        $products->save();

        return redirect()->back()->with('message', 'product added successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = adminCategory::all();
        $product = adminProduct::findOrFail($id);

        return view('admin.products.edit', compact('product', 'categories'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = adminProduct::findOrFail($id);

        $data = $request->validate([
            'product_name' => 'string|required',
            'product_description' => 'string|required',
            'img' => 'image|required',
            'category' => 'string|required:categories, id'
        ]);

        $imageName = $request->file('img')->store('products');

        $product->product_name = $data['product_name'];
        $product->product_description = $data['product_description'];
        $product->img = $imageName;
        $product->category_id = $data['category'];

        $product->save();

        return back()->with('message', 'Product updated successfully.');


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = adminProduct::findOrFail($id);

        $product->delete();
        return redirect()->back();
        //
    }
}