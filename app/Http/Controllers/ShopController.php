<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('public.index', compact('categories'));

    }

    /**
     * view all the products inside the shop
     * @return Application|Factory|View
     */
    public function productsList()
    {
        $products = Product::where('quantity', '<>', '')->get();
        return view('public.shop.list-products', compact('products'));
    }

    /**
     * view specific product inside the shop
     * @param $product_id
     * @return Application|Factory|View
     */
    public function SingleProduct(Category $category, Product $product)
    {
        return view('public.shop.single-product', compact('product'));
    }

    public function productsCategoryList(Category $category)
    {

        $categories = Category::all();
        $products = Product::where('quantity', '<>', '0')
            ->where('category_id', $category->id)->get();

        return view('public.shop.list-category-products', compact('products', 'categories'));

    }
}
