<?php

namespace App\Http\Controllers;
//use app\Models;
use App\Models\AdminModel;
use App\Models\AdminPostModel;
use App\Models\PostModel;
use App\Models\AccountControllerModel;
use App\Models\ContentControllerModel;
use App\Models\GeneralUserModel;
use App\Models\RegistrationRequestModel;
use App\Models\GuPostRequestModel;
//use App\Models\AdminModel;
use Illuminate\Http\Request;

class adminControllerad extends Controller
{
    public function Viewhomead(){
      $pst= PostModel::all();
      $adminpst=AdminPostModel::all();
      //print_r($adminpst);
      //print_r($pst);
        return view('Admin.AdminHome')->with ('post',$pst)
                                    ->with ('adminpost',$adminpst);
    }
    public function Viewpostad(Request $req){
        $adminpst=AdminPostModel::where('adminid', $req->session()->get('username'))
                                        ->get();
        return view('Admin.Post')->with('ownpost',$adminpst);
    }
    public function deletegupostad($id){
        $post=PostModel::find($id)->delete();
        
        return redirect('Admin/'); 
    }
    public function Viewinsertad(){
        return view('Admin.Insert');
    }
    public function ViewPendingpostad(){
        $penpost=GuPostRequestModel::all();
        return view('Admin.penPostReq')->with('penpost', $penpost);
    }
    public function ViewPendingSignupReqad(){
        $pensignup=RegistrationRequestModel::all();
        return view('Admin.penSignupreq')->with('pensignup', $pensignup);
    }
    public function ViewAdminlistad(){
        $adminlist=AdminModel::all();
        return view('Admin.Adminlist')->with('adminlist', $adminlist);
    }
    public function ViewACListad(){
        $Aclist=AccountControllerModel::all();
        return view('Admin.AClist')->with('Aclist', $Aclist);
    }
    public function blockac($id){
        //return redirect('/admin');
    }
    public function deleteac($id){
        //return redirect('/admin');
    }


    public function ViewCCListad(){
        $Cclist=ContentControllerModel::all();
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
        $Gulist=GeneralUserModel::all();
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
        return view('Admin.Blocklist');
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
