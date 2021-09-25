<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductController extends Controller
{
    //
    function products()
    {
        $data = Category::all();
        return view ('products',['category'=>$data]);
        
    }
}
