<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Member;

class MemberController extends Controller
{
    //
    function team_list()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $member = Member::all();
        return view('admin.team-list', $data,['member'=>$member]);
        
    }

    function team_add()
    {
        $member = Member::all();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view ('admin.team-add',$data,['member'=>$member]);
        
    }
    public function new_team(Request $request)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'inputDesignation' => 'required',
            'inputEmail' => 'required|email',
        ]);

        if($request->file('inputImage')){
            $inputImage = time().'.'.$request->file('inputImage')->extension();  
            $request->file('inputImage')->move(public_path('assets/images/team'), $inputImage);
            $uploadImage = 'assets/images/team/'.$inputImage;
        }
        else{
            $uploadImage = 'assets/images/team.png';
        }
        
        $members = new Member;
        $members->member_name = $request->input('inputName');
        $members->member_designation = $request->input('inputDesignation');
        $members->member_email = $request->input('inputEmail');
        $members->member_image = $uploadImage;
        $members->save();


        $member = Member::all();
        if($members->save()){
            
            return redirect()->route('admin.team-list',['member'=>$member]);
        }
        
    }

    function team_update($id)
    {
        
        $member = Member::where('id',$id)->get();
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        
        return view ('admin.team-update',$data,['member'=>$member]);
        
    }

    public function team_modify(Request $request,$id)
    {
        
        $request->validate([
            'inputName' => 'required',            
            'inputDesignation' => 'required',
            'inputEmail' => 'required|email',
        ]);        
        
        

       
        $members = Member::find($id);
        $members->member_name = $request->input('inputName');
        $members->member_designation = $request->input('inputDesignation');
        $members->member_email = $request->input('inputEmail');
        if($request->file('inputImage')){
            $inputImage = time().'.'.$request->file('inputImage')->extension();  
            $request->file('inputImage')->move(public_path('assets/images/team'), $inputImage);
            $uploadImage = 'assets/images/team/'.$inputImage;
        }
        else{
            $uploadImage = $members->member_image;
        }
        $members->member_image = $uploadImage;
        $members->save();



        $member = Member::all();
        
        if($members->save()){
            return redirect()->route('admin.team-list',['member'=>$member])->with('success','"'.$members->member_name.'" Has been Succesfuly Updated');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
            
        
    }
    function team_destroy($id){
        
        $row = Member::find($id);
        
        if($row){
            $row->delete();
            return back()->with('success','"'.$row->member_name.'" Has been Succesfully Deleted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }      
    }
}
