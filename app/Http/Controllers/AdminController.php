<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    
    function dashboard()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('admin.index', $data);
        
    }

    function profile()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $user = User::where('id','=', session('LoggedUser'))->get();
        return view('admin.profile', $data,['user'=>$user]);
        
    }
    public function profile_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'email' => 'required|email',
        ]);        
        
        

       
        $users = User::find($id);
        $users->user_name = $request->input('inputName');
        $users->email = $request->input('email');
        $users->save();


        if($users->save()){
            
            return back()->with('success','Information Updated');
        }
        
    }

    function change_password()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $user = User::where('id','=', session('LoggedUser'))->get();
        return view('admin.change-password', $data,['user'=>$user]);
        
    }

    public function change_password_modify(Request $request,$id)
    {
        
        $request->validate([
            'oldPassword' => 'required',            
            'newPassword' => 'required|min:3|max:30',
            'confirmPassword' => 'required|min:3|max:30',            

        ]);        
        
        

       
        $users = User::find($id);
        if($request->input('oldPassword')==$users->password){
            if($request->input('inputPassword')==$request->input('inputPasswordConfirm')){
                $users->password = $request->input('newPassword');
                $users->save();
            }
            else{
                return back()->with('fail','Password Do not Match');
            }
        }
        else{
            return back()->with('fail','Old Password Do not Match');
        }
        


        if($users->save()){
            
            return back()->with('success','Password Updated');
        }
        
    }
    
}
