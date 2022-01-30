<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\link;

class LinkController extends Controller
{
    
    function links_list()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $link = Link::all();
        return view('admin.links-list', $data,['link'=>$link]);
        
    }

    function link_update($id)
    {
        
        $link = Link::where('id',$id)->get();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        
        return view ('admin.link-update',$data,['link'=>$link]);
        
    }

    public function link_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'inputIcon' => 'required',
            'inputLink' => 'required',
        ]);        
        
        

       
        $links = Link::find($id);
        $links->link_name = $request->input('inputName');
        $links->link_link = $request->input('inputLink');
        $links->link_icon = $request->input('inputIcon');
        $links->link_status = $request->input('inputStatus');
        $links->save();


        $link = Link::all();
        
        if($links->save()){
            return redirect()->route('admin.links-list',['link'=>$link])->with('success','"'.$links->link_name.'" Has been Succesfuly Updated');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
            
        
    }

    function link_add()
    {
        $link = Link::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.link-add',$data,['link'=>$link]);
        
    }
    public function new_link(Request $request)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'inputIcon' => 'required',
            'inputLink' => 'required',
        ]);
        
        $links = new Link;
        $links->link_name = $request->input('inputName');
        $links->link_link = $request->input('inputLink');
        $links->link_icon = $request->input('inputIcon');
        $links->link_status = $request->input('inputStatus');
        $links->save();


        $link = Link::all();
        if($links->save()){
            
            return redirect()->route('admin.links-list',['link'=>$link]);
        }
        
    }
    function link_destroy($id){
        
        $row = Link::find($id);
        if($row->id==1)
        {
            return back()->with('fail','Main Admin Can not be Deleted');
        }
        else{
            $row->delete();
            return back()->with('success','"'.$row->link_name.'" Has been Succesfully Deleted');
        }

        
    }

    
    
}
