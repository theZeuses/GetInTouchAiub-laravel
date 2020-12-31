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
use App\Models\adminnotice;
use App\Models\User;
//use App\Models\AdminModel;
use Illuminate\Http\Request;
use App\Http\Requests\notice;
use App\Http\Requests\insert;
use App\Http\Requests\editpro;
use App\Http\Requests\post;
use Validator;


class adminControllerad extends Controller
{
    protected $req;
    public function __construct(Request $request) {
        $this->req = $request;
    }
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
    public function submitpost(post $p){
        $adminpst=new AdminPost;
        $adminpst->adminid=$this->req->session()->get('username');
        $adminpst->text=$this->req->post;
        $adminpst->save();
        return redirect('Admin/post/');
       // print_r($this->req->post);
    }
    public function deletegupostad($id){
        $post=GeneralUserPost::find($id)->delete();
        
        return redirect('Admin/'); 
    }
    public function Viewinsertad(){
        return view('Admin.Insert');
    }
    public function Viewinsertpostad(insert $i){
        if($this->req->type=='Account Control Manager') {
            $ac=new AccountController;
            $ac->acid= $this->req->userid;
            $ac->name= $this->req->name;
            $ac->email= $this->req->email;
            $ac->gender= $this->req->gender;
            $ac->dob= $this->req->dob;
            $ac->address= $this->req->add;
            $ac->profilepicture= '';//$this->req->pic;
            $ac->accountstatus= 'Active';
            $ac->save();
            
            $usr=new User;
            $usr->userid=$this->req->userid;
            $usr->password='1';
            $usr->usertype='Account Control Manager';
            $usr->accountstatus= 'Active';
            $usr->save();
            return redirect('/Admin/ACList');

        }else{
            $ac=new ContentController;
            $ac->ccid= $this->req->userid;
            $ac->name= $this->req->name;
            $ac->email= $this->req->email;
            $ac->gender= $this->req->gender;
            $ac->dob= $this->req->dob;
            $ac->address= $this->req->add;
            $ac->profilepicture='';// $this->req->pic;
            $ac->accountstatus= 'Active';
            $ac->save();

            $usr=new User;
            $usr->userid=$this->req->userid;
            $usr->password='1';
            $usr->usertype='Account Control Manager';
            $usr->accountstatus= 'Active';
            $usr->save();
            return redirect('/Admin/CCList');
        }
       
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
        ContentController::where('ccid',$id)->delete();
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
        AccountController::where('acid',$id)->delete();
        return redirect('/Admin/BlockList/');

    }
    public function deleteblockcc($id){
        ContentController::where('ccid',$id)->delete();
        return redirect('/Admin/BlockList/');

    }
    public function deleteblockgu($id){
        GeneralUser::where('guid',$id)->delete();
        return redirect('/Admin/BlockList/');
    }
    public function ViewProfilead(Request $req){
        $pro=Admin::where('adminid',$req->session()->get('username'))->get();
        return view('Admin.AdProfile')->with('pro',$pro);
    }
    public function ViewNotificationad(Request $req){
        $notice =adminnotice::where('adminid',$req->session()->get('username'))->get();
        return view('Admin.Mynotification')->with('notice', $notice);
    }
    
    public function Editexsistingnotice($id){
        $ntc=adminnotice::where('id',$id)->get();
        return view('Admin.editnotify')->with('ntc',$ntc);
    }
    public function Editexsistingnoticesub($id,notice $n){
        
        //print_r('submited');
        $ntc = adminnotice::find($id);
       $ntc->adminid = $this->req->adminid;
       $ntc->subject = $this->req->subject;
       $ntc->body = $this->req->body;
       $ntc->towhom = $this->req->userid;
       $ntc->save();
       return redirect ('Admin/notification');
        //return view('Admin.addNotification')->with('userid',$id)->with('adminid',$this->req->session()->get('username'));
    }



 

    public function deleteexsistingnotice($id){
        adminnotice::where('id',$id)->delete();
        return redirect('Admin/notification');
        //return view('Admin.EditPro');
    }
    public function ViewCreateNotificationad($id){
        
       // print_r($this->req->session()->get('username'));
        return view('Admin.addNotification')->with('userid',$id)->with('adminid',$this->req->session()->get('username'));
    }
    public function ViewCreateNotificationpostad($id,notice $n){
        
         //print_r('submited');
         $ntc = new adminnotice;
        $ntc->adminid = $this->req->adminid;
        $ntc->subject = $this->req->subject;
        $ntc->body = $this->req->body;
        $ntc->towhom = $this->req->userid;
        $ntc->save();
        return redirect ('Admin/notification');
         //return view('Admin.addNotification')->with('userid',$id)->with('adminid',$this->req->session()->get('username'));
     }
    public function ViewReportad(){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'localhost:8000/Adminhome/report');
        $values=json_decode( $res->getBody());
        return view('Admin.Report')->with('values', $values);
    }
    public function VieweditProfilead(){
        $info=Admin::where('adminid',$this->req->session()->get('username'))->get();
        return view('Admin.EditPro')->with('info',$info);
    }
    public function VieweditProfileadsub(editpro $e){
        $info=Admin::find($this->req->id);
        $info->name=$this->req->name;
        $info->email=$this->req->email;
        $info->address=$this->req->add;
        $info->dob=$this->req->dob;
        $info->save();

        return redirect('/Admin/Profile');
    }

    public function searchadmin($key){
        $string=json_decode($key);
        error_log($string->key);
        if(strlen($string->key)>0){
            $result=Admin::where('adminid','LIKE','%'.$string->key.'%' )
                            ->orWhere('name','LIKE','%'.$string->key.'%')
                            ->orWhere('email','LIKE','%'.$string->key.'%')
                            ->orWhere('gender','LIKE','%'.$string->key.'%')
                            ->orWhere('dob','LIKE','%'.$string->key.'%')
                            ->orWhere('address','LIKE','%'.$string->key.'%')
                            ->get();
        }
        else{
            $result=Admin::where('accountstatus','Active')->get();
        }
        return response()->json(['result'=>$result]);
    }
    public function searchcc($key){
        $string=json_decode($key);
        error_log($string->key);
        if(strlen($string->key)>0){
            $result=ContentController::where('ccid','LIKE','%'.$string->key.'%' )
                            ->orWhere('name','LIKE','%'.$string->key.'%')
                            ->orWhere('email','LIKE','%'.$string->key.'%')
                            ->orWhere('gender','LIKE','%'.$string->key.'%')
                            ->orWhere('dob','LIKE','%'.$string->key.'%')
                            ->orWhere('address','LIKE','%'.$string->key.'%')
                            //->where('accountstatus','Active')
                            ->get();
        }
        else{
            $result=ContentController::where('accountstatus','Active')->get();
        }
        return response()->json(['result'=>$result]);
    }
    public function searchuser($key){
        $string=json_decode($key);
        error_log($string->key);
        if(strlen($string->key)>0){
            $result=GeneralUser::where('guid','LIKE','%'.$string->key.'%' )
                            ->orWhere('name','LIKE','%'.$string->key.'%')
                            ->orWhere('email','LIKE','%'.$string->key.'%')
                            ->orWhere('gender','LIKE','%'.$string->key.'%')
                            ->orWhere('dob','LIKE','%'.$string->key.'%')
                            ->orWhere('address','LIKE','%'.$string->key.'%')
                            //->where('accountstatus','Active')
                            ->get();
        }
        else{
            $result=GeneralUser::where('accountstatus','Active')->get();
        }
        return response()->json(['result'=>$result]);
    }
    public function searchac($key){
        $string=json_decode($key);
        error_log($string->key);
        if(strlen($string->key)>0){
            $result=AccountController::where('acid','LIKE','%'.$string->key.'%' )
                            ->orWhere('name','LIKE','%'.$string->key.'%')
                            ->orWhere('email','LIKE','%'.$string->key.'%')
                            ->orWhere('gender','LIKE','%'.$string->key.'%')
                            ->orWhere('dob','LIKE','%'.$string->key.'%')
                            ->orWhere('address','LIKE','%'.$string->key.'%')
                            //->where('accountstatus','Active')
                            ->get();
        }
        else{
            $result=AccountController::where('accountstatus','Active')->get();
        }
        return response()->json(['result'=>$result]);
    }
    public function searchpost($key){
        $string=json_decode($key);
        error_log($string->key);
        if(strlen($string->key)>0){
            $result=AdminPost::where('adminid','LIKE','%'.$string->key.'%' )
                            ->orWhere('text','LIKE','%'.$string->key.'%')
                            ->get();
            $res=GeneralUserPost::where('guid','LIKE','%'.$string->key.'%' )
                                    ->orWhere('text','LIKE','%'.$string->key.'%')
                                    ->orWhere('approvedby','%'.$string->key.'%')
                                    ->get();
        }
        else{
            $result=AdminPost::all();
            $res=GeneralUserPost::all();
        }
        //error_log($res,$result);
        return response()->json(['result'=>$result,'res'=>$res]);
    }
}
