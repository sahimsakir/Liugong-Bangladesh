<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Cookie;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
    function forget_password()
    {
        
        return view ('auth.forget-password');
        
    }
    function password_link(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
      ]);
      $action_link = route('auth.reset_password',['token'=>$token,'email'=>$request->email]);
           $body = "We have received a request to reset the password for <b>Liugong Bangladesh</b> account associated with ".$request->email.". You can reset your password by clicking the link below.";

           \Mail::send('auth.email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
                $message->from('admin@liugongbangladesh.com', 'Admin - Liugong');
                $message->to($request->email, 'User')
                        ->subject('Reset Password');
           });

           return back()->with('success', 'We have e-mailed your password reset link');
    }

    public function reset_password(Request $request, $token = null){
        return view('auth.reset-password')->with(['token'=>$token,'email'=>$request->email]);

    }
    public function renew_password(Request $request){
        $request->validate([            
            'inputPassword' => 'required|min:3|max:30',
            'inputPasswordConfirm' => 'required|min:3|max:30',            

        ]);

        $users = User::where('email','=',$request->email)->first();
            if($request->input('inputPassword')==$request->input('inputPasswordConfirm')){
                $users->password = $request->input('inputPassword');
                $users->save();
            }
            else{
                return back()->with('fail','Password Do not Match');
            }

        


        if($users->save()){
            
            return back()->with('success','Password Updated');
        }
        // return view('auth.reset-password')->with(['token'=>$token,'email'=>$request->email]);

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
