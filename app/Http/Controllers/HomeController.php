<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // $products = Product::with('category')->get();
        $categories = Category::all();
        return view('Pages.dashboard', compact('categories'));
    }

    public function show($name)
    {
        $categories = Category::all();
        $categorybyid = Category::with('products.images')->where('name', $name)->firstOrFail();
        return view('Pages.produk', compact('categorybyid', 'categories'));
    }

    public function showproduct($name)
    {
        $categories = Category::all();
        $productbyid = Product::with('images')->where('name', $name)->firstOrFail();
        return view('Pages.detail_produk', compact('productbyid', 'categories'));
    }

    public function aboutus()
    {
        $categories = Category::all();
        return view('Pages.about_us', compact('categories'));
    }

    public function detailproduk($name)
    {
        $categories = Category::all();
        $productbyid = Product::with('product_images')->where('name', $name)->firstOrFail();

        return view('Pages.detail_produk', compact('categories'));
    }
}
