<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Cookie;

class AuthController extends Controller
{
    
    function login()
    {
        
        return view ('auth.login');
        
    }
    function register()
    {
        
        return view ('auth.register');
        
    }
    function password()
    {
        
        return view ('auth.password');
        
    }

    public function new_registration(Request $request)
    {
        
        $request->validate([
            'inputUserName' => 'required',            
            'email' => 'required|email|unique:users',
            'inputPassword' => 'required|min:3|max:30',
            'inputPasswordConfirm' => 'required|min:3|max:30',
        ]); 
        
        
        if($request->input('inputPassword')==$request->input('inputPasswordConfirm')){
            $user = new User;
            $user->user_name = $request->input('inputUserName');
            $user->email = $request->input('email');
            $user->password = $request->input('inputPassword');
            $user->status = 'Pending';
            // $user->user_features = $request->input('inputFeatures');
            // $user->user_parameters = $request->input('inputParameters');
            // $user->user_image = $uploadImage;
            // $user->user_catalog = $uploadCatalog;
            // $user->user_class = $cat->category_class;
            $user->save();
        }
        else{
            return back()->with('fail','Password Do not Match');
        }
        


        // $users = user::join('categories','categories.id','=','users.category_id')->get();
        if($user->save()){
            return back()->with('success','Registartion Has been Succesfuly Done');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
        
    }

    function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'inputPassword' => 'required|min:3|max:30',
        ]); 

        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','User Not Found');
        }else{
            //check password
            if($userInfo->status=='Active'){
                if($request->inputPassword == $userInfo->password){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    if($request->has('inputRememberPassword')){
                        Cookie::queue('email',$request->email,1440);
                        Cookie::queue('password',$request->inputPassword,1440);
                    }
                    return redirect('/dashboard');
    
                }else{
                    return back()->with('fail','Wrong password');
                }
            }
            else if($userInfo->status=='Pending'){
                return back()->with('fail','Your accounts status is '.$userInfo->status.' Wait for Admin Approval');
            }
            else{
                return back()->with('fail','Your accounts is '.$userInfo->status);
            }
            
        }

    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

    
}
