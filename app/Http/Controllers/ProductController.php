<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function products()
    {
        $data = Category::all();
        $product = Product::all();
        return view ('products',['category'=>$data,'product'=>$product]);
        
    }
}
