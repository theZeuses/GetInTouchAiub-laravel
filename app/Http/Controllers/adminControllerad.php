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
use App\Models\User;
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
    public function approvepenpostreq($id,Request $req){
        $penpost=GeneralUserPostRequest::where('id',$id)->get();
        //print_r($pensign);
        $gupst = new GeneralUserPost;
        
        $gupst->guid = $penpost[0]['guid'];
        $gupst->text = $penpost[0]['text'];
        $gupst->file = $penpost[0]['file'];
        $gupst->approvedby = $req->session()->get('username');
        $gupst->save();

        $penpost=GeneralUserPostRequest::where('id',$id)->delete();
        return redirect ('/Admin/PendingPostReq');

    }
    public function deletepenpostreq($id){
       
        $penpost=GeneralUserPostRequest::where('id',$id)->delete();
        return redirect ('/Admin/PendingPostReq');

    }
    public function ViewPendingSignupReqad(){
        $pensignup=RegistrationRequest::all();
        return view('Admin.penSignupreq')->with('pensignup', $pensignup);
    }
    public function approvepensignupreq($id){
        $pensign=RegistrationRequest::where('guid',$id)->get();
        //print_r($pensign);
        $gu = new GeneralUser;
        
        $gu->guid = $pensign[0]['guid'];
        $gu->name = $pensign[0]['name'];
        $gu->email = $pensign[0]['email'];
        $gu->gender = $pensign[0]['gender'];
        $gu->dob = $pensign[0]['dob'];
        $gu->address = $pensign[0]['address'];
        $gu->profilepicture = $pensign[0]['profilepicture'];
        $gu->userstatus = $pensign[0]['userstatus'];
        $gu->accountstatus = 'Active';
        $gu->save();

        $user=new User;
        $user->userid=$pensign[0]['guid'];
        $user->password='1';
        $user->usertype='General User';
        $user->accountstatus='Active';
        $user->save();

        $pensign=RegistrationRequest::where('guid',$id)->delete();
        return redirect ('/Admin/PendingSignupReq');

    }
    public function deletepensignupreq($id){
       
        $pensign=RegistrationRequest::where('guid',$id)->delete();
        return redirect ('/Admin/PendingSignupReq');

    }


    public function ViewAdminlistad(){
        $adminlist=Admin::all();
        return view('Admin.Adminlist')->with('adminlist', $adminlist);
    }
    public function ViewACListad(){
        $Aclist=AccountController::where('accountstatus','Active')->get();
        return view('Admin.AClist')->with('Aclist', $Aclist);
    }
    public function blockac($id){
        AccountController::where('acid',$id)
                    ->update(['accountstatus'=>'Blocked']);
        return redirect('/Admin/ACList');
        //return redirect('/admin');
    }
    public function deleteac($id){
        AccountController::where('acid',$id)->delete();
        return redirect('/Admin/ACList');
    }


    public function ViewCCListad(){
        $Cclist=ContentController::where('accountstatus','Active')->get();
        return view('Admin.CClist')->with('Cclist', $Cclist);
       // return view('Admin.CClist');
    }

    public function blockcc($id){
        ContentController::where('ccid',$id)
        ->update(['accountstatus'=>'Blocked']);
        return redirect('/Admin/CCList/');
    }
    public function deletecc($id){
        ContentController::where('guid',$id)->delete();
        return redirect('/Admin/CCList/');
    }

    
    public function ViewUserlistad(){
        $Gulist=GeneralUser::where('accountstatus','Active')->get();
        return view('Admin.GUlist')->with('Gulist', $Gulist);
       
       // return view('Admin.GUlist');
    }
    public function blockgu($id){
        GeneralUser::where('guid',$id)
        ->update(['accountstatus'=>'Blocked']);
        return redirect('/Admin/Userlist/');
    }
    public function deletegu($id){
        GeneralUser::where('guid',$id)->delete();
        return redirect('/Admin/Userlist/');
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
    public function unblockgu($id){
        GeneralUser::where('guid',$id)
        ->update(['accountstatus'=>'Active']);
        return redirect('/Admin/BlockList');
    }
    public function unblockcc($id){
        ContentController::where('ccid',$id)
        ->update(['accountstatus'=>'Active']);
        return redirect('/Admin/BlockList/');

    }
    public function unblockac($id){
        AccountController::where('acid',$id)
        ->update(['accountstatus'=>'Active']);
        return redirect('/Admin/BlockList');

    }
    public function deleteblockac($id){

    }
    public function deleteblockcc($id){
        

    }
    public function deleteblockgu($id){
        GeneralUser::where('guid',$id)->delete();
        return redirect('/Admin/BlockList/');
    }
    public function ViewProfilead(Request $req){
        $pro=Admin::where('adminid',$req->session()->get('username'))->get();
        return view('Admin.AdProfile')->with('pro',$pro);
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
