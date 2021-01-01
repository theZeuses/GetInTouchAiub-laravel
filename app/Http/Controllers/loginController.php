<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index(){
    	return view('contentController.login');
    }

    public function verify(Request $req){

        $user  = User::where('userid', $req->username)
                        ->where('password', $req->password)
                        ->first();
        echo $req->username;
        echo $req->password;
        echo $user;
    	if($user != null){

            $req->session()->put('username', $req->username);
            $req->session()->put('type', $user->usertype);
            
            if($req->session()->get('type') == "Content Control Manager"){
                return redirect(route('contentController.home'));
            }elseif($req->session()->get('type') == "Account Control Manager"){
                return redirect(route('accountController.achome'));
            }else{
                return redirect('/login');
            }
    	}else{
            echo "moon";
    		//return redirect('/login');
    	}
    }
}
