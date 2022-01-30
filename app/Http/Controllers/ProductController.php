<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class ProductController extends Controller
{
    //
    function products()
    {
        $category = Category::all();
        $product = Product::orderBy('id', 'ASC')->get();
        return view ('site.products',compact('category','product'));
        
    }

    function  product_list()
    {
        $products = Product::join('categories','categories.id','=','products.category_id')->get(['products.id','products.product_name','products.product_image','products.product_catalog','categories.category_name']);
        
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.product-list',$data,['products'=>$products]);
        
    }
    
    function product_add()
    {
        $category = Category::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.product-add',$data,['category'=>$category]);
        
    }
    public function new_product(Request $request)
    {
        
        $request->validate([
            'inputName' => 'required',            
        ]);
        $inputCatalog = time().'.'.$request->file('inputCatalog')->extension();  
        $request->file('inputCatalog')->move(public_path('assets/pdf'), $inputCatalog);
        $uploadCatalog = 'assets/pdf/'.$inputCatalog;
        $inputImage = time().'.'.$request->file('inputImage')->extension();  
        $request->file('inputImage')->move(public_path('assets/images/product'), $inputImage);
        $uploadImage = 'assets/images/product/'.$inputImage;

        $cat = Category::where('id',$request->input('inputCategory'))->first();
        

       

        $product = new Product;
        $product->product_name = $request->input('inputName');
        $product->category_id = $request->input('inputCategory');
        $product->product_short_intro = $request->input('inputShortIntro');
        $product->product_description = $request->input('inputDescription');
        $product->product_features = $request->input('inputFeatures');
        $product->product_parameters = $request->input('inputParameters');
        $product->product_image = $uploadImage;
        $product->product_catalog = $uploadCatalog;
        $product->product_class = $cat->category_class;
        $product->save();


        $products = Product::join('categories','categories.id','=','products.category_id')->get();
        if($product->save()){
            
            return redirect()->route('admin.product-list',['products'=>$products])->with('success',$product->product_name.' Created');
        }
        else{
            return back()->with('fail','Something Wrong Please Try again');
        }
        
    }

    function product_update($id)
    {
        $products = Product::join('categories','categories.id','=','products.category_id')->where('products.id',$id)->get();
        $category = Category::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.product-update',$data,compact('category','products'));
        
    }
    public function product_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            

        ]);        
        
        $cat = Category::where('id',$request->inputCategory)->first();
        

       
        $product = Product::find($id);
        $product->product_name = $request->input('inputName');
        $product->category_id = $request->input('inputCategory');
        $product->product_short_intro = $request->input('inputShortIntro');
        $product->product_description = $request->input('inputDescription');
        $product->product_features = $request->input('inputFeatures');
        $product->product_parameters = $request->input('inputParameters');
        if($request->file('inputCatalog')){
            $inputCatalog = time().'.'.$request->file('inputCatalog')->extension();  
            $request->file('inputCatalog')->move(public_path('uploads'), $inputCatalog);
            $uploadCatalog = 'uploads/'.$inputCatalog;
        }
        else{
            $uploadCatalog = $product->product_catalog;
        }
        if($request->file('inputImage')){
            $inputImage = time().'.'.$request->file('inputImage')->extension();  
            $request->file('inputImage')->move(public_path('uploads'), $inputImage);
            $uploadImage = 'uploads/'.$inputImage;
        }
        else{
            $uploadImage = $product->product_image;
        }
        $product->product_catalog = $uploadCatalog;
        $product->product_image = $uploadImage;
        $product->product_class = $cat->category_class;
        $product->save();


        $products = Product::join('categories','categories.id','=','products.category_id')->get();
        if($product->save()){
            
            return redirect()->route('admin.product-list',['products'=>$products])->with('success',$product->product_name.' Updated');
        }
        
    }

    function product_destroy($id){
        
        $row = Product::find($id);     
        $row->delete();
        
        
        $products = Product::join('categories','categories.id','=','products.category_id')->get();
        return redirect()->route('admin.product-list',['products'=>$products])->with('success',$row->product_name.' deleted');;
        
    }
}
