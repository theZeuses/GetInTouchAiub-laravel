<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralUser;

class accountControllerController extends Controller
{
    //home
    public function guhome(){
        $profile = GeneralUser::where('guid',session('username'))->first();
        return view('accountController.acHome',['profile'=>$profile]);
    }
}
