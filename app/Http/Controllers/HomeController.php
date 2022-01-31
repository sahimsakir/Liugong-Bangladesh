<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Link;

class HomeController extends Controller
{
    function index()
    {
        $data = Category::all();
        $link = Link::all();
        return view ('site.index',['category'=>$data,'link'=>$link]);
        
    }
    function product_by_category($id)
    {
        $data = Category::where('category_class',$id)->first();
        $category = Category::where('category_class',$id)->get();
        $product = Product::where('category_id',$data->id)->orderBy('id', 'ASC')->get();
        return view ('site.category_products',compact('category','product'));
        
    }
}
