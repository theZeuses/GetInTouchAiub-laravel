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

     		$key = $req->key;
	        $adminlist = Admin::find($req->key);
	        $strign=`<table id="view">
							<tr>
								<td>Admin ID</td>
								<td>Name</td>
								<td>Email</td>
								<td>Gender</td>
								<td>Date Of Birth</td>
								<td>Address</td>
								<td>Profile Picture</td>
							</tr>`;
			for($i=0; $i<count($adminlist) ; $i++)
			{
				$strign=$strign."<tr>";
				$strign=$strign."<td>".$adminlist[$i]['adminid']."</td>";
				$strign=$strign."<td>".$adminlist[$i]['name']."</td>";
				$strign=$strign."<td>".$adminlist[$i]['email']."</td>";
				$strign=$strign."<td>".$adminlist[$i]['gender']."</td>";
				$strign=$strign."<td>".$adminlist[$i]['dob']."</td>";
				$strign=$strign."<td>".$adminlist[$i]['address']."</td>";
				$strign=$strign."</tr>";
			}
			$strign=$strign+`</table>`;

			$data = array(
				'data' => $strign
			);

			echo json_encode($data);
    }
}
