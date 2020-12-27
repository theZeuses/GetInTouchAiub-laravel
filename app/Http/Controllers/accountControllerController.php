<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AccountControlManager;
use App\Models\Admin;
use App\Models\ContentControlManager;
use App\Models\GeneralUser;

class accountControllerController extends Controller
{
    //account controller
    public function achome(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.acHome',['profile'=>$profile]);
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
    //general user
    public function acgulist(){
        $gulist = GeneralUser::all();
        return view('accountController.acGUList',['gulist'=>$gulist]);
    }
    public function acsearchgu(Request $req){
   
            $gulist = GeneralUser::where('name','like','%'.$req->key.'%')->get();          
            return json_encode($gulist);
    }
}
