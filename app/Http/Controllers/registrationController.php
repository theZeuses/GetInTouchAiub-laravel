<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationRequest;
use App\Http\Requests\registrationFormRequest;

class registrationController extends Controller
{
    public function registrationform(){
    	return view('generalUser.registrationForm');
    }

    public function signup(registrationFormRequest $req){
        $file = $req->file('image');
        $filename = time().$file->getClientOriginalName();
        if($file->move('assets/generalUser/profilepicture', $filename)){
			$rr = new RegistrationRequest();
			$rr->guid = $req->guid;
			$rr->name = $req->name;
			$rr->email = $req->email;
			$rr->gender = $req->gender;
			$rr->dob = $req->dob;
			$rr->address = $req->address;
			$rr->profilepicture = "/assets/generalUser/profilepicture/".$filename;
			$rr->userstatus = $req->userstatus;
			if($rr->save())
			{
				return redirect('/login');
			}
			else
			{
				echo 'Failed to submit registration request!';
			}

		}else{
			echo "Failed to submit";
		}
    }
}
