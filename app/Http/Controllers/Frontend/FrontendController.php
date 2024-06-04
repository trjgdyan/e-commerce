<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\User;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = ProductCategory::all();
        $products = Product::all();

        return view('frontend.home', compact('categories', 'products'));
    }

    public function detail()
    {
        return view('frontend.detail');
    }

    public function dashboard()
    {
        $categories = ProductCategory::all();
        $products = Product::all();
        $totalCategories = ProductCategory::count();
        $totalProducts = Product::count();
        $totalUsers = User::count();

        return view('frontend.dashboard', compact('totalCategories', 'totalProducts', 'categories', 'products', 'totalUsers'));
    }
}
