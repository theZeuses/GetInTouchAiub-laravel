<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralUser;
use App\Models\User;
use App\Models\GuPost;
use App\Models\GuText;
use App\Http\Requests\updateProfileRequest;
use App\Http\Requests\sendtextRequest;

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

    //All Post
    public function allpost(){
        $allpost = GuPost::all();
        return view('generalUser.allpost',['allpost'=>$allpost]);
    }

    //search any post
     public function searchanypost(Request $req){
   
            $allpost = GuPost::where('text','like','%'.$req->key.'%')->get();          
            return json_encode($allpost);
    }

    //send text
    public function sendtext(){
        return view('generalUser.sendtext');
    }
    public function sendtextsave(sendtextRequest $req){
        
        $text = new GuText();
        $text->guid         =   session('username'); 
        $text->text         =   $req->text;
        $text->receiverid   =   $req->receiverid;
        if($text->save()){
            $req->session()->flash('msg', 'Send Message...');
            return redirect()->route('generalUser.sendtext');
        }
    }

    //received text
     public function receivetext(){
        $receivetext = GuText::all();
        return view('generalUser.receivetext',['receivetext'=>$receivetext]);
    }
}

 