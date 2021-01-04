<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralUser;
use App\Models\User;
use App\Models\GuPost;
use App\Models\GuText;
use App\Models\AdminNotice;
use App\Models\GuPostRequest;
use App\Http\Requests\updateProfileRequest;
use App\Http\Requests\sendtextRequest;
use App\Http\Requests\postnewcontentRequest;

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

    //search gu
    public function searchgu(){
        return view('generalUser.searchgu');
    }
    public function searchguresult(Request $req){
        $gulists = GeneralUser::where('guid','like','%'.$req->key.'%')->get();          
        return json_encode($gulists);
    }


    //send text
    public function sendtext(){
        return view('generalUser.sendtext');
    }
    public function sendtextsave(sendtextRequest $req){
        $sendtext = new GuText();
        $sendtext->guid         =   session('username'); 
        $sendtext->text         =   $req->text;
        $sendtext->receiverid   =   $req->receiverid;
        if($sendtext->save()){
            $req->session()->flash('msg', 'Message Send Successfully!!!...');
            return redirect()->route('generalUser.sendtext');
        }
    }

    //received text
     public function receivetext(){
        $receivetext = GuText::all();
        return view('generalUser.receivetext',['receivetext'=>$receivetext]);
    }

    //view notice
     public function viewnotice(){
        // $client     = new Client();
        // $res        = $client->request('GET', 'http://127.0.0.1:3000/acnotice/noticesAPI');
        // $viewnotice    = json_decode($res->getBody());
        // //print_r($notices);
        // return view('accountController.viewnotice',['viewnotice'=>$viewnotice]);
        $viewnotice = AdminNotice::all();
        return view('generalUser.viewnotice',['viewnotice'=>$viewnotice]);
    }

    //Post new content
    public function postnewcontent(){
        return view('generalUser.postnewcontent');
    }
    public function postnewcontentsave(postnewcontentRequest $req){
        if($req->hasFile('file')){
            $file = $req->file('file');
            $name = time().$file->getClientOriginalName();
            if($file->move('assets/generalUser/post', $name)){
                $postnewcontent = new GuPostRequest();
                $postnewcontent->guid         =   session('username'); 
                $postnewcontent->text         =   $req->text;
                $postnewcontent->file         =   "/assets/generalUser/post/".$name;
                if($postnewcontent->save()){
                    $req->session()->flash('msg', 'Post send!');
                    return redirect()->route('generalUser.postnewcontent');
                }
            }
        }
        else{
            $postnewcontent = new GuPostRequest();
            $postnewcontent->guid         =   session('username'); 
            $postnewcontent->text         =   $req->text;
            if($postnewcontent->save()){
                $req->session()->flash('msg', 'Post send!');
                return redirect()->route('generalUser.postnewcontent');
            }
        }
    }

    //My Post
    public function mypost(){
        return view('generalUser.mypost');
    }

    public function mypostlist(){
        $postlist = GuPost::where('guid',session('username'))->get();
        return view('generalUser.mypostlist',['postlist'=>$postlist]);
    }
    public function editpost($id){
        
    }
    public function deletepost($id){
        
    }

}
 