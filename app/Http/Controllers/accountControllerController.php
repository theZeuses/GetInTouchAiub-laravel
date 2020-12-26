<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AccountControlManager;

class accountControllerController extends Controller
{
    public function acHome(){
        $profile = AccountControlManager::where('acid',session('username'))->first();
        return view('accountController.acHome',['profile'=>$profile]);
    }
}
