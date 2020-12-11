<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentControllerController extends Controller
{
    private function clicker($serial){
        for ($i = 0; $i < 8; $i++) { $clicked[$i] = ""; }
        $clicked[$serial] = "active";

        return $clicked;
    }

    public function home(){
        $clicked = $this->clicker(1);
        return view('contentController.menu')->with('clicked', $clicked);
    }

    public function login(){
        return view('contentController.login');
    }
}
