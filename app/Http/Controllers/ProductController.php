<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $products = Product::with('category')->get();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $categories  = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' =>'required',
            'price' =>'required',
            'quantity' =>'required',
            'description' =>'required',
        ]);
        Product::create($request->all());
        return redirect()->back()->with('success' ,'Your Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        return view('admin.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' =>'required',
            'price' =>'required',
            'quantity' =>'required',
            'description' =>'required',
        ]);
        $product->update([$request->all()]);
        return redirect()->back()->with('success' ,'Your Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
        $product->deleteOrFail();
        return redirect()->back()->with('success' ,'Your Product has been deleted');
    }
}
