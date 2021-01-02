<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralUser;
use App\Models\User;
use App\Http\Requests\updateProfileRequest;

class generalUserController extends Controller
{
    //home
    public function guhome(){
        $profile = GeneralUser::where('guid',session('username'))->first();
        return view('generalUser.guHome',['profile'=>$profile]);
    }

    //profile
    public function profile(){
       $profile = GeneralUser::where('guid',session('username'))->first();
           return view('generalUser.profile', ['profile'=>$profile]);
    }

    //profileDelete 
     public function profiledelete(){
           $profile = GeneralUser::where('guid',session('username'))->first();
        return view('generalUser.profiledelete',['profile'=>$profile]);
    }

    public function profiledestroy(){
        $generaluser = GeneralUser::where('guid',session('username'))->first();
        if($generaluser->delete())
        {
            $user = User::where('userid',session('username'))->first();
            if($user->delete())
            {
                return redirect('/logout');
            }
        }
    }

    //ProfileUpdate
    public function profileedit(){
        $profile = GeneralUser::where('guid',session('username'))->first();
        return view('generalUser.profileedit',['profile'=>$profile]);
    }
    public function profileupdate(updateProfileRequest $req){
           
               
        $profile = GeneralUser::where('guid',session('username'))->first();

        $profile->name              = $req->name;
        $profile->email             = $req->email;
        $profile->dob               = $req->dob;
        $profile->address           = $req->address;
        $profile->save();
        
        return redirect()->route('generalUser.profile');
                
           
        
    }
}

 