<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostRequest;

class contentControllerController extends Controller
{
    private function clicker($serial){
        for ($i = 0; $i < 8; $i++) { 
            $clicked[$i] = ""; 
        }
        $clicked[$serial] = "active";

        return $clicked;
    }

    public function home(){
        $postReq = PostRequest::all();
        return view('contentController.index',['clicked'=>$this->clicker(0), 'posts'=>$postReq]);
    }
}
