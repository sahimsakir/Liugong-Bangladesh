<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class UserController extends Controller
{
    
    function user_list()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $user = $user = User::where('status','!=','Pending')->get();
        return view('admin.user-list', $data,['user'=>$user]);
        
    }

    function user_update($id)
    {
        
        $user = User::where('id',$id)->get();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        
        return view ('admin.user-update',$data,['user'=>$user]);
        
    }

    public function user_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'email' => 'required|email',
        ]);        
        
        

       
        $users = User::find($id);
        $users->user_name = $request->input('inputName');
        $users->email = $request->input('email');
        $users->status = $request->input('inputStatus');
        $users->save();


        $user = User::all();
        if($users->save()){
            return redirect()->route('admin.user-list',['user'=>$user])->with('success','"'.$users->user_name.'" Has been Succesfuly Updated');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
            
        //     return redirect()->route('admin.user-list',['user'=>$user]);
        // }
        
    }

    function user_add()
    {
        $user = User::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.user-add',$data,['user'=>$user]);
        
    }
    public function new_user(Request $request)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'email' => 'required|email|unique:users',
            'inputPassword' => 'required|min:3|max:30',
        ]);
        
        $users = new User;
        $users->user_name = $request->input('inputName');
        $users->email = $request->input('email');
        $users->password = $request->input('inputPassword');
        $users->status = $request->input('inputStatus');
        $users->save();


        $user = User::all();
        if($users->save()){
            
            return redirect()->route('admin.user-list',['user'=>$user]);
        }
        
    }
    function user_destroy($id){
        
        $row = User::find($id);
        if($row->id==1)
        {
            return back()->with('fail','Main Admin Can not be Deleted');
        }
        else{
            $row->delete();
            return back()->with('success','"'.$row->user_name.'" Has been Succesfully Deleted');
        }

        
    }

    function user_request()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $user = User::where('status','Pending')->get();
        return view('admin.user-request', $data,['user'=>$user]);
        
    }
    function user_request_update($id)
    {
        
        $user = User::where('id',$id)->get();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        
        return view ('admin.user-request-update',$data,['user'=>$user]);
        
    }

    public function user_request_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'email' => 'required|email',
        ]);        
        
        

       
        $users = User::find($id);
        if($request->input('inputStatus')==$users->status){
            return back()->with('fail','Status Not Changed');
        }
        else{
            $users->user_name = $request->input('inputName');
            $users->email = $request->input('email');
            $users->status = $request->input('inputStatus');
            $users->save();
        }
        


        $user = User::all();
        if($users->save()){
            
            return redirect()->route('admin.user-request',['user'=>$user])->with('success','"'.$users->user_name.'" Updated');
        }
        
    }

    function user_request_destroy($id){
        
        $row = User::find($id);
        $row->delete();
        
        $user = User::all();
        return redirect()->route('admin.user-request',['user'=>$user]);
        
    }
    
}
