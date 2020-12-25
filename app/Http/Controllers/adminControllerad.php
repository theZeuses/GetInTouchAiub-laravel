<?php

namespace App\Http\Controllers;
//use app\Models;
use App\Models\Admin;
use App\Models\AdminPost;
use App\Models\GeneralUserPost;
use App\Models\AccountController;
use App\Models\ContentController;
use App\Models\GeneralUser;
use App\Models\RegistrationRequest;
use App\Models\GeneralUserPostRequest;
//use App\Models\AdminModel;
use Illuminate\Http\Request;

class adminControllerad extends Controller
{
    public function Viewhomead(){
      $pst= GeneralUserPost::all();
      $adminpst=AdminPost::all();
      //print_r($adminpst);
      //print_r($pst);
        return view('Admin.AdminHome')->with ('post',$pst)
                                    ->with ('adminpost',$adminpst);
    }
    public function Viewpostad(Request $req){
        $adminpst=AdminPost::where('adminid', $req->session()->get('username'))
                                        ->get();
        return view('Admin.Post')->with('ownpost',$adminpst);
    }
    public function deletegupostad($id){
        $post=GeneralUserPost::find($id)->delete();
        
        return redirect('Admin/'); 
    }
    public function Viewinsertad(){
        return view('Admin.Insert');
    }
    public function ViewPendingpostad(){
        $penpost=GeneralUserPostRequest::all();
        return view('Admin.penPostReq')->with('penpost', $penpost);
    }
    public function ViewPendingSignupReqad(){
        $pensignup=RegistrationRequest::all();
        return view('Admin.penSignupreq')->with('pensignup', $pensignup);
    }
    public function ViewAdminlistad(){
        $adminlist=Admin::all();
        return view('Admin.Adminlist')->with('adminlist', $adminlist);
    }
    public function ViewACListad(){
        $Aclist=AccountController::all();
        return view('Admin.AClist')->with('Aclist', $Aclist);
    }
    public function blockac($id){
        //return redirect('/admin');
    }
    public function deleteac($id){
        //return redirect('/admin');
    }


    public function ViewCCListad(){
        $Cclist=ContentController::all();
        return view('Admin.CClist')->with('Cclist', $Cclist);
       // return view('Admin.CClist');
    }

    public function blockcc($id){
        //return redirect('/admin');
    }
    public function deletecc($id){
        //return redirect('/admin');
    }

    
    public function ViewUserlistad(){
        $Gulist=GeneralUser::all();
        return view('Admin.GUlist')->with('Gulist', $Gulist);
       
       // return view('Admin.GUlist');
    }
    public function blockgu($id){
        //return redirect('/admin');
    }
    public function deletegu($id){
        //return redirect('/admin');
    }


    public function ViewBlockListad(){
        $blkAc=AccountController::where('accountstatus','Blocked')
                                        ->get();
        $blkCc=ContentController::where('accountstatus','Blocked')
                                         ->get();
        $blkgu=GeneralUser::where('accountstatus','Blocked')
                                        ->get();
        return view('Admin.Blocklist')->with('Acblocklist',$blkAc)
                                        ->with('Ccblocklist',$blkCc)
                                        ->with('Gublocklist',$blkgu);
    }
    public function ViewProfilead(){
        return view('Admin.AdProfile');
    }
    public function ViewNotificationad(){
        return view('Admin.Mynotification');
    }
    public function ViewReportad(){
        return view('Admin.Report');
    }
    public function VieweditProfilead(){
        return view('Admin.EditPro');
    }
}
