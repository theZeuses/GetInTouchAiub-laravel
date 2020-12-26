<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\GeneralUser;
use Illuminate\Http\Request;
use App\Models\PostRequest;
use App\Models\Announcement;
use App\Models\ContentControlManager;

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

    public function postRequest(){
        $postReq = PostRequest::all();

        if(count($postReq) > 0){
            $generalUser = GeneralUser::where('guid',$postReq[0]->guid)->get();
            return view('contentController.post.request',['clicked'=>$this->clicker(1), 'posts'=>$postReq, 'guser'=> $generalUser]);
        }else{
            return view('contentController.post.request-zero',['clicked'=>$this->clicker(1), 'posts'=>$postReq]);
        }
        
    }

    public function approvePost($id){

    }

    public function declinePost($id){

    }

    public function analyzePoster($pid, $gid){

    }

    public function announcement(Request $req){
        $announcements = Announcement::where('ccid',$req->session()->get('username'))->get();

        if(count($announcements) > 0){
            $cc = ContentControlManager::where('ccid',$announcements[0]->ccid)->get();
            return view('contentController.announcement.announcement',['clicked'=>$this->clicker(2), 'announcements'=>$announcements, 'cc'=> $cc[0]]);
        }else{
            return view('contentController.announcement.announcement-zero',['clicked'=>$this->clicker(2), 'announcements'=>$announcements]);
        }
    }

    public function createAnnouncement(){
        return view('contentController.announcement.create', ['clicked'=>$this->clicker(2)]);
    }

    public function storeAnnouncement(AnnouncementRequest $req){
        $announcement = new Announcement();
        $announcement->ccid = $req->session()->get('username');
        $announcement->subject = $req->subject;
        $announcement->body = $req->body;

        $announcement->save();
        return redirect()->route('contentController.announcement');
    }

    public function updateAnnouncement($id){
        $announcement = Announcement::find($id);
        return view('contentController.announcement.update', ['clicked'=>$this->clicker(2), 'announcement'=>$announcement]);
    }

    public function storeUpdatedAnnouncement(AnnouncementRequest $req, $id){
        $announcement = Announcement::find($id);
        $announcement->ccid = $req->session()->get('username');
        $announcement->subject = $req->subject;
        $announcement->body = $req->body;

        $announcement->save();
        return redirect()->route('contentController.announcement');
    }

    public function deleteAnnouncement(){
        
    }
}
