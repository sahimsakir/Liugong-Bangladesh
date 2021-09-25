<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    function index()
    {
        $data = Category::all();
        return view ('index',['category'=>$data]);
        
    }
}
