<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\AccountControlManager;
use App\Models\Admin;
use App\Models\ContentControlManager;
use App\Models\GeneralUser;
use App\Models\User;
use App\Models\RegistrationRequest;
use App\Models\AccountControllerText;

use App\Http\Requests\updateProfileRequest;
use App\Http\Requests\createCCRequest;
use App\Http\Requests\editCCRequest;
use App\Http\Requests\createTextRequest;

class accountControllerController extends Controller
{
    //account controller
    public function achome(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.acHome',['profile'=>$profile]);
    }
    public function getmyinfo(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.myProfile',['profile'=>$profile]);
    }
    public function updateprofile(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.updateProfile',['profile'=>$profile]);
    }
    public function updateprofilesave(updateProfileRequest $req){
        if($req->hasFile('profilepicture')){
            $file = $req->file('profilepicture');
            $location = time().$file->getClientOriginalName();
            //echo $location;
            if($file->move('assets/accountController/profilepicture', $location)){
               
                $profile = AccountControlManager::where('acid',session('username'))->first();

                $profile->name              = $req->name;
                $profile->email             = $req->email;
                $profile->dob               = $req->dob;
                $profile->address           = $req->address;
                $profile->profilepicture    = '/assets/accountController/profilepicture/'.$location;

                if($profile->save()){
                    return redirect()->route('accountController.getmyinfo');
                }else{
                    echo "not saved";
                }
            }else{
                echo "error";
            }
        }
        else{
             
            $profile = AccountControlManager::where('acid',session('username'))->first();

            $profile->name       = $req->name;
            $profile->email      = $req->email;
            $profile->dob        = $req->dob;
            $profile->address    = $req->address;

            if($profile->save()){
                return redirect()->route('accountController.getmyinfo');
            }else{
                echo "not saved";
            }
        }
    }
    public function deactivateprofile(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.deactivateProfile',['profile'=>$profile]);
    }
    public function deactivateprofilesave(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        
        $profile->accountstatus    = "Deactivated";
        if($profile->save()){
            $user = User::where('userid',session('username'))->first();
            $user->accountstatus   = "Deactivated";
            if($user->save()){
                return redirect('/logout');
             }else{
                echo "not saved";
            }
        }else{
            echo "not saved";
        }
    }
    public function createtext(){
        return view('accountController.createText');
    }
    public function createtextsave(createTextRequest $req){
        $text = new AccountControllerText();
        $text->acid         =   session('username'); 
        $text->text         =   $req->text;
        $text->receiverid   =   $req->receiverid;
        if($text->save()){
            $req->session()->flash('msg', 'Message send!');
            return redirect()->route('accountController.createtext');
        }
    }

    //admiin
    public function acadminlist(){
        $adminlist = Admin::all();
        return view('accountController.acAdminList',['adminlist'=>$adminlist]);
    }
    public function acsearchadmin(Request $req){
   
	        $adminlist = Admin::where('name','like','%'.$req->key.'%')->get();			
			return json_encode($adminlist);
    }


    //content controller
    public function accclist(){
        $cclist = ContentControlManager::all();
        return view('accountController.acCCList',['cclist'=>$cclist]);
    }
    public function acsearchcc(Request $req){
   
            $cclist = ContentControlManager::where('name','like','%'.$req->key.'%')->get();          
            return json_encode($cclist);
    }
    public function createcc(){
        return view('accountController.createCC');
    }
    public function createccsave(createCCRequest $req){
        if($req->hasFile('profilepicture')){
            $file = $req->file('profilepicture');
            $location = time().$file->getClientOriginalName();
            //echo $location;
            if($file->move('assets/accountController/profilepicture/cc', $location)){
               
                $cc = new ContentControlManager();

                $cc->ccid              = $req->ccid;
                $cc->name              = $req->name;
                $cc->email             = $req->email;
                $cc->gender            = $req->gender;
                $cc->dob               = $req->dob;
                $cc->address           = $req->address;
                $cc->profilepicture    = '/assets/accountController/profilepicture/cc/'.$location;
                $cc->accountstatus     = 'Active';

                if($cc->save()){
                    $user = new User();
                    
                    $user->userid           = $req->ccid;
                    $user->password         = $req->ccid;
                    $user->usertype         = "Content Control Manager";
                    $user->accountstatus    = "Active";
                    if($user->save()){
                        return redirect()->route('accountController.cclist');
                    }else{
                        echo "cc not saved";
                    }
                }else{
                    echo "cc not saved";
                }
            }else{
                echo "error";
            }
        }
        else{ 
            
            $cc = new ContentControlManager();

            $cc->ccid              = $req->ccid;
            $cc->name              = $req->name;
            $cc->email             = $req->email;
            $cc->gender            = $req->gender;
            $cc->dob               = $req->dob;
            $cc->address           = $req->address;
            $cc->profilepicture    = '';
            $cc->accountstatus    = 'Active';

            if($cc->save()){
                $user = new User();
                
                $user->userid           = $req->ccid;
                $user->password         = $req->ccid;
                $user->usertype         = "Content Control Manager";
                $user->accountstatus    = "Active";
                if($user->save()){
                    return redirect()->route('accountController.cclist');
                }else{
                    echo "cc not saved";
                }
            }else{
                echo "error";
            }
        }
    }
    public function editcc($id){
        $cc = ContentControlManager::find($id);
        return view('accountController.editCC', $cc);
    }
    public function editccsave(editCCRequest $req, $id){
        if($req->hasFile('profilepicture')){
            $file = $req->file('profilepicture');
            $location = time().$file->getClientOriginalName();
            if($file->move('assets/accountController/profilepicture/cc', $location)){
               
                $cc = ContentControlManager::find($id);
                
                $cc->name              = $req->name;
                $cc->email             = $req->email;
                $cc->dob               = $req->dob;
                $cc->address           = $req->address;
                $cc->profilepicture    = '/assets/accountController/profilepicture/cc/'.$location;

                if($cc->save()){
                    return redirect()->route('accountController.cclist');
                }else{
                    echo "cc not saved";
                }
            }else{
                echo "error";
            }
        }
        else{ 
            
            $cc = ContentControlManager::find($id);

            $cc->name              = $req->name;
            $cc->email             = $req->email;
            $cc->dob               = $req->dob;
            $cc->address           = $req->address;
            $cc->profilepicture    = '';

            if($cc->save()){
                return redirect()->route('accountController.cclist');
            }else{
                echo "error";
            }
        }
    }
    public function deletecc($id){
        $cc = ContentControlManager::find($id);
        return view('accountController.deleteCC', $cc);
    }
    public function deleteccsave($id){
        $cc = ContentControlManager::find($id);
        if($cc->delete())
        {
            $user = User::where('userid',$cc->ccid)->first();
            if($user->delete()) 
            {            
                return redirect()->route("accountController.cclist");
            }
        }
    }


    //general user
    public function acgulist(){
        $gulist = GeneralUser::all();
        return view('accountController.acGUList',['gulist'=>$gulist]);
    }
    public function acsearchgu(Request $req){
   
            $gulist = GeneralUser::where('name','like','%'.$req->key.'%')->get();          
            return json_encode($gulist);
    }
    public function deletegu($id){
        $gu = GeneralUser::find($id);
        return view('accountController.deleteGU', $gu);
    }
    public function deletegusave($id){
        $gu = GeneralUser::find($id);
        if($gu->delete())
        {
            $user = User::where('userid',$gu->guid)->first();
            if($user->delete()) 
            {            
                return redirect()->route("accountController.gulist");
            }
        }
    }
    public function bannedgu($id){
        $gu = GeneralUser::find($id);
        return view('accountController.bannedGU', $gu);
    }
    public function bannedgusave($id){
        $gu = GeneralUser::find($id);
        $gu->accountstatus = "Banned";
        if($gu->save())
        {
            $user = User::where('userid',$gu->guid)->first();
            $user->accountstatus = "Banned";
            if($user->save()) 
            {            
                return redirect()->route("accountController.gulist");
            }
        }
    }
    public function temporarilyblockgu($id){
        $gu = GeneralUser::find($id);
        return view('accountController.temporarilyBlockGU', $gu);
    }
    public function temporarilyblockgusave($id){
        $gu = GeneralUser::find($id);
        $gu->accountstatus = "Temporarily Blocked";
        if($gu->save())
        {
            $user = User::where('userid',$gu->guid)->first();
            $user->accountstatus = "Temporarily Blocked";
            if($user->save()) 
            {            
                return redirect()->route("accountController.gulist");
            }
        }
    }
    public function verifygeneraluser(){
        $verifygeneraluserlist = RegistrationRequest::All();
        return view('accountController.verifyGeneralUser', ['list'=>$verifygeneraluserlist]);
    }
    public function declineregrequest($id){
        $user = RegistrationRequest::find($id);
        return view('accountController.declineRegRequest', $user);
    }
    public function declineregrequestsave($id){
        $user = RegistrationRequest::find($id);
        if($user->delete())
        {
            return redirect()->route('accountController.verifygeneraluser');
        }
    }
    public function approveregrequest($id){
        $data = RegistrationRequest::find($id);
        
        $gu = new GeneralUser();
        $gu->guid              = $data->guid;
        $gu->name              = $data->name;
        $gu->email             = $data->email;
        $gu->gender            = $data->gender;
        $gu->dob               = $data->dob;
        $gu->address           = $data->address;
        $gu->profilepicture    = $data->profilepicture;
        $gu->userstatus        = $data->userstatus;
        $gu->accountstatus     = 'Active';
        if($gu->save())
        {    
            $user = new User();        
            $user->userid           = $data->guid;
            $user->password         = $data->guid;
            $user->usertype         = "General User";
            $user->accountstatus    = "Active";
        
            if($user->save()){
                $data = RegistrationRequest::find($id);
                if($data->delete()){
                    return redirect()->route('accountController.verifygeneraluser');
                }
            }
        }
    }
}
