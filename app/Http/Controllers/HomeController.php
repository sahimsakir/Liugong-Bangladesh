<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    function index()
    {
        $data = Category::all();
        return view ('index',['category'=>$data]);
        
    }
    function product_by_category($id)
    {
        $data = Category::where('category_class','=',$id)->get();
        $product = Product::all();
        return view ('category_products',['category'=>$data,'product'=>$product]);
        
    }
}
