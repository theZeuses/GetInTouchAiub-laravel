<?php

namespace App\Http\Controllers;
use App\Models\GeneralUser;
use App\Models\PostRequest;
use App\Models\WarningUser;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\GeneralUserPost;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\ContentControlManager;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnnouncementRequest;

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
        Toastr::success('New announcement added successfully','', ["positionClass" => "toast-top-right"]);
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
        //$req->session()->flash('success', 'Announcement updated successfully');
        Toastr::success('Announcement updated successfully','', ["positionClass" => "toast-top-right"]);
        return redirect()->route('contentController.announcement');
    }

    public function deleteAnnouncement($id){
        $announcement = Announcement::find($id);
        $announcement->delete();
        Toastr::success('Announcement deleted successfully','', ["positionClass" => "toast-top-right"]);
        return redirect()->route('contentController.announcement');
    }

    public function searchAnnouncement($query){
        $data = json_decode($query);
        if(strlen($data->query) > 0){
            $announcements = Announcement::where('subject','LIKE','%'.$data->query.'%')->get();
        }else{
            $announcements = Announcement::all();
        }
        $contentController = [];
        for($i = 0; $i < count($announcements); $i++){
            $contentController[$i] = ContentControlManager::where('ccid',$announcements[$i]->ccid);
        }        
        return response()->json(['announcement'=>$announcements, 'contentController'=>$contentController]);
    }

    public function users(){
        $userlist = GeneralUser::all();
        return view('contentController.users.usersList', ['clicked'=>$this->clicker(3), 'userlist'=>$userlist]);
    }

    public function userProfile($id){
        $user = GeneralUser::find($id);
        return view('contentController.users.profile', ['clicked'=>$this->clicker(3), 'user'=>$user]);
    }

    public function userReport($id){
        $data = [];
        $generalUser = GeneralUser::find($id);
        $data[0] = GeneralUserPost::where('guid', $generalUser->guid)->count();
        $notApproved = WarningUser::where('guid', $generalUser->guid)->get();
        $data[1] = 0;
        foreach($notApproved as $obj){
            if(strlen($obj->warningtext) == 0){
                $data[1] += 1;
            }
        }
        $data[2] = 0;
        foreach($notApproved as $obj){
            if(strlen($obj->warningtext) > 0){
                $data[2] += 1;
            }
        }
        return view('contentController.users.individualReport', ['clicked'=>$this->clicker(3), 'user'=>$generalUser, 'data'=>$data]);

    }
    public function searchUsers($query){
        $data = json_decode($query);
        if(strlen($data->query) > 0){
            $userlist = GeneralUser::where('guid','LIKE','%'.$data->query.'%')
                                    ->orWhere('name','LIKE','%'.$data->query.'%')
                                    ->orWhere('email','LIKE','%'.$data->query.'%')
                                    ->get();
        }else{
            $userlist = GeneralUser::all();
        }      
        return response()->json(['userlist'=>$userlist]);
    }

    public function profile(){
        $user = ContentControlManager::where('ccid', Session::get('username'))->first();
        return view('contentController.profile.profile', ['clicked'=>$this->clicker(4), 'user'=>$user]);
    }

    public function updateProfile(){
        $user = ContentControlManager::where('ccid', Session::get('username'))->first();
        return view('contentController.profile.update', ['clicked'=>$this->clicker(4), 'user'=>$user]);
    }

    public function reports(){
        return view('contentController.reports.reports', ['clicked'=>$this->clicker(5)]);
    }
    
}
