<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminControllerad extends Controller
{
    public function Viewhomead(){
        return view('Admin.AdminHome');
    }
    public function Viewpostad(){
        return view('Admin.Post');
    }
    public function Viewinsertad(){
        return view('Admin.Insert');
    }
    public function ViewPendingpostad(){
        return view('Admin.penPostReq');
    }
    public function ViewPendingSignupReqad(){
        return view('Admin.penSignupreq');
    }
    public function ViewAdminlistad(){
        return view('Admin.Adminlist');
    }
    public function ViewACListad(){
        return view('Admin.AClist');
    }
    public function ViewCCListad(){
        return view('Admin.CClist');
    }
    public function ViewUserlistad(){
        return view('Admin.GUlist');
    }
    public function ViewBlockListad(){
        return view('Admin.Blocklist');
    }
    public function ViewProfilead(){
        return view('Admin.AdProfile');
    }
    public function ViewNotificationad(){
        return view('Admin.Mynotification');
    }
    public function ViewReportad(){
        return view('Admin.Report');
    }
}
