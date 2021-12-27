<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function products()
    {
        $category = Category::all();
        $product = Product::all();
        return view ('products',compact('category','product'));
        
    }
}
