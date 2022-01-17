<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;


class CategoryController extends Controller
{
    
    function category_list()
    {
        $category = Category::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('admin.category-list', $data,['category'=>$category]);
        
    }
    function category_add()
    {
        $category = Category::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.category-add',$data,['category'=>$category]);
        
    }
    public function new_category(Request $request)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'inputSlug' => 'required',
            'inputMetaTitle' => 'required',          
        ]);
        $inputBanner = time().'.'.$request->file('inputBanner')->extension();  
        $request->file('inputBanner')->move(public_path('assets/images/banner'), $inputBanner);
        $uploadBanner = 'assets/images/banner/'.$inputBanner;
        $inputImage = time().'.'.$request->file('inputImage')->extension();  
        $request->file('inputImage')->move(public_path('assets/images/category'), $inputImage);
        $uploadImage = 'assets/images/category/'.$inputImage;

        

      

        $category = new Category;
        $category->category_name = $request->input('inputName');
        $category->category_slug = $request->input('inputSlug');
        $category->category_meta_title = $request->input('inputMetaTitle');
        $category->category_meta_description = $request->input('inputMetaDescription');
        $category->category_meta_key = $request->input('inputMetaKeyword');
        $category->category_description = $request->input('inputDescription');
        $category->category_image = $uploadImage;
        $category->category_Banner = $uploadBanner;
        $category->category_class = $request->input('inputSlug');
        $category->save();


        $cat = Category::all();
        if($category->save()){
            return redirect()->route('admin.category-list',['category'=>$cat])->with('success',$category->category_name.' Created');
        }
        
    }
    function category_destroy($id){
        
        $row = Category::find($id);
        
        $row->delete();
        
        $category = Category::all();
        return redirect()->route('admin.category-list',['category'=>$category])->with('success',$row->category_name.' Deleted');
        
    }

    function category_update($id)
    {
        
        $category = Category::where('id',$id)->get();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        
        return view ('admin.category-update',$data,['category'=>$category]);
        
    }
    public function category_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'inputSlug' => 'required',
            'inputMetaTitle' => 'required',
        ]);        
               

       
        $category = Category::find($id);
        $category->category_name = $request->input('inputName');
        $category->category_slug = $request->input('inputSlug');
        $category->category_meta_title = $request->input('inputMetaTitle');
        $category->category_description = $request->input('inputDescription');
        $category->category_meta_description = $request->input('inputMetaDescription');
        $category->category_meta_key = $request->input('inputMetaKeyword');
        if($request->file('inputBanner')){
            $inputBanner = time().'.'.$request->file('inputBanner')->extension();  
            $request->file('inputBanner')->move(public_path('uploads'), $inputBanner);
            $uploadBanner = 'uploads/'.$inputBanner;
        }
        else{
            $uploadBanner = $category->category_banner;
        }
        if($request->file('inputImage')){
            $inputImage = time().'.'.$request->file('inputImage')->extension();  
            $request->file('inputImage')->move(public_path('uploads'), $inputImage);
            $uploadImage = 'uploads/'.$inputImage;
        }
        else{
            $uploadImage = $category->category_image;
        }
        $category->category_banner = $uploadBanner;
        $category->category_image = $uploadImage;
        $category->category_class = '';
        $category->save();


        $cat = category::all();
        
        if($category->save()){
            
            return redirect()->route('admin.category-list',['category'=>$cat])->with('success',$category->category_name.' Updated');
        }
        
    }
    
}
