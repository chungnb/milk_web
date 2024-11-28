<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(){
        $pro = Product::all();
        return view('layouts.product.slide_product', compact('pro'));
    }

    public function show_product_category(){
        $cates = Category::all();
        $products = $cates->products;
        return view('layouts.product.product_cate', compact('cates,products'));
    }
}