<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AccountControlManager;
use App\Models\Admin;

class accountControllerController extends Controller
{
    public function achome(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.acHome',['profile'=>$profile]);
    }
    public function acadminlist(){
        $adminlist = Admin::all();
        return view('accountController.acAdminList',['adminlist'=>$adminlist]);
    }
    public function acsearchadmin(Request $req){
   
	        $adminlist = Admin::where('name','like','%'.$req->key.'%')->get();			
			return json_encode($adminlist);
    }
}
