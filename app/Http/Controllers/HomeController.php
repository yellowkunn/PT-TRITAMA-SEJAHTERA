<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        $categorybyid = Category::with('products')->where('name', $name)->firstOrFail();
        return view('Pages.produk', compact('categorybyid', 'categories'));
    }
}
