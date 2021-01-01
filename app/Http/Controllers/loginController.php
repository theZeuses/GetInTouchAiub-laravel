<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function viewlogin(){
        return view('Login.index');
    }
    public function verifyuser(Request $req){
      
       //print_r( $req->password);
       //$validation= UserModel::all();
       //print_r($validation);
       $validation= User::where('userid',$req->username)
                            ->where('password',$req->password)
                            ->get();
        if ($validation[0]['usertype']=='Admin'&& $validation[0]['accountstatus']=='Active')
        {
            //print_r($validation);
            $req->session()->put('username' , $req->username);
            $req->session()->put('type',$validation[0]['usertype']=='Admin');
            return redirect('/Admin');
        }
        else{
            return redirect('/login');

        }
    
                    
        //
    }
    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect ('/login');
    }
}
