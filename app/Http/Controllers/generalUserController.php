<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralUser;

class generalUserController extends Controller
{
    //home
    public function guhome(){
        $profile = GeneralUser::where('guid',session('username'))->first();
        return view('generalUser.guHome',['profile'=>$profile]);
    }
}
