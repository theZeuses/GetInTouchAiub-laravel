<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralUser;
use App\Models\User;

class generalUserController extends Controller
{
    //home
    public function guhome(){
        $profile = GeneralUser::where('guid',session('username'))->first();
        return view('generalUser.guHome',['profile'=>$profile]);
    }
     //profile
    public function profile(){
       $generaluser = GeneralUser::where('guid',session('username'))->first();
           return view('generalUser.profile', $generaluser);
    }
    
    //profileDelete 
     public function profiledelete($guid){
           //echo $guid;
           $generaluser = GeneralUser::where('guid',$guid)->first();
           return view('generalUser.profiledelete', $generaluser);
    }

    //profileDestroy 
    public function profiledestroy($guid){
         $generaluser = GeneralUser::where('guid',$guid)->first();
            if($generaluser->delete())
            {
                $user = User::where('userid',$guid)->first();
                if($user->delete())
                {
                    return redirect('/logout');
                }
            }
        
    }
}
