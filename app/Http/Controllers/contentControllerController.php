<?php

namespace App\Http\Controllers;
use PDF;
use DomPDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\GeneralUser;
use App\Models\PostRequest;
use App\Models\WarningUser;
use App\Models\Announcement;
use App\Models\Contribution;
use Illuminate\Http\Request;
use App\Models\GeneralUserPost;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\WarningRequest;
use App\Models\ContentControlManager;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnnouncementRequest;
use App\Models\ContentControlManagerNotice;
use App\Http\Requests\ContentControllerRequest;
use App\Models\ContentControlManagerRequestForAction;
use App\Http\Requests\ContentControllerCredentialsRequest;

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
        $postReq = PostRequest::find($id);

        $post = new GeneralUserPost();
        $post->guid = $postReq->guid;
        $post->text = $postReq->text;
        $post->file = $postReq->file;
        $post->approvedby = Session::get('username');

        $notice = new ContentControlManagerNotice();
        $notice->ccid = Session::get('username');
        $notice->guid = $postReq->guid;
        $notice->subject = "Approved";
        $notice->body = "Your post has been approved";

        Contribution::where('ccid', Session::get('username'))->increment('postapproved', 1);

        $post->save();
        $postReq->delete();
        $notice->save();

        return redirect()->route('contentController.postRequest');
    }

    public function declinePost($id){
        $postReq = PostRequest::find($id);

        $warning = new WarningUser();
        $warning->guid = $postReq->guid;
        $warning->warningtext = "";
        $warning->ccid = Session::get('username');

        $notice = new ContentControlManagerNotice();
        $notice->ccid = Session::get('username');
        $notice->guid = $postReq->guid;
        $notice->subject = "Delined";
        $notice->body = "Your post has been declined";

        Contribution::where('ccid', Session::get('username'))->increment('postdeclined', 1);

        $warning->save();
        $postReq->delete();
        $notice->save();

        return redirect()->route('contentController.postRequest');
    }

    public function analyzePoster($pid, $gid){
        $data = [];
        $generalUser = GeneralUser::find($gid);
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
        return view('contentController.post.analyzePoster', ['clicked'=>$this->clicker(1), 'pid'=>$pid, 'data'=>$data, 'user'=>$generalUser]);
    }

    public function analyzePosterAction(WarningRequest $req, $pid, $gid){
        $guid = GeneralUser::find($gid)->guid;

        $request = new ContentControlManagerRequestForAction();
        $request->ccid = Session::get('username');

        $status = false;

        if(strlen($req->banDays) > 0){
            if(strlen($req->blockDays) > 0){
                $request->actiontype = "Block & Ban";
                $request->text = "Block general user: ".$guid." for ".$req->blockDays." days from posting and ban for ".$req->banDays." days.";
            }else{
                $request->actiontype = "Ban";
                $request->text = "Ban general user: ".$guid." for ".$req->banDays." days.";
            }
            $status = true;
        }else if(strlen($req->blockDays) > 0){
            $request->actiontype = "Block";
            $request->text = "Block general user: ".$guid." for ".$req->blockDays." days from posting.";
            $status = true;
        }

        if($status){
            $request->save();
            if(strlen($req->warning) > 0){
                $warning = new WarningUser();
                $warning->guid = $guid;
                $warning->warningtext = $req->warning;
                $warning->ccid = Session::get('username');

                $warning->save();
                return redirect()->route('contentController.declinePost', [$pid]);
            }else{
                return redirect()->route('contentController.declinePost', [$pid]);
            }
        }else if(strlen($req->warning) > 0){
            $warning = new WarningUser();
            $warning->guid = $guid;
            $warning->warningtext = $req->warning;
            $warning->ccid = Session::get('username');

            $warning->save();
            return redirect()->route('contentController.declinePost', [$pid]);
        }else{
            Toastr::error('Must ban, block or warn to proceed.','', ["positionClass" => "toast-top-right"]);
            return redirect()->route('contentController.analyzePoster', [$pid, $gid]);
        }
    }

    public function banForEver($pid, $gid){
        $request = new ContentControlManagerRequestForAction();
        $request->ccid = Session::get('username');
        $request->actiontype = "Ban";
        $request->text = "Ban general user: "+$gid+" forever.";

        $request->save();

        return redirect()->route('contentController.declinePost', [$pid]);
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
        Contribution::where('ccid', Session::get('username'))->increment('announcements', 1);
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

    public function userReportThroughAPI($id){
        $generalUser = GeneralUser::find($id);
        $query = json_encode(['guid'=>$generalUser->guid]);
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'localhost:3000/contentcontroller/api/users/report/'.$query);

        $data=json_decode($res->getBody());
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

    public function storeUpdatedProfile(ContentControllerRequest $req){
        $user = ContentControlManager::where('ccid', Session::get('username'))->first();
        if($req->hasFile('image')){
            $image = $req->file('image');
            $imageName = $image->getClientOriginalName().Carbon::now()->timestamp;
            if($image->move('assets/contentController/pictures/', $imageName)){
                $user->profilepicture = $imageName;
            }           
        }
        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->dob = $req->dob;
        $user->address = $req->address;

        $user->save();
        Toastr::success('Profile updated successfully','', ["positionClass" => "toast-top-right"]);
        return redirect()->route('contentController.updateProfile');
    }

    public function account(){
        return view('contentController.profile.account', ['clicked'=>$this->clicker(4)]);
    }

    public function updateAccount(ContentControllerCredentialsRequest $req){
        $user = User::where('userid', $req->session()->get('username'))->first();
        $user->password = $req->pass;
        $user->save();
        Toastr::success('Password updated successfully','', ["positionClass" => "toast-top-right"]);
        return redirect()->route('contentController.account');
    }

    public function reports(){
        return view('contentController.reports.reports', ['clicked'=>$this->clicker(5)]);
    }
    
    public function usersReport(){
        $data = [];
        $data[0] = GeneralUser::where('accountstatus', 'Active')->count();
        $data[1] = GeneralUser::where('accountstatus', 'Blocked')->count();
        $data[2] = WarningUser::distinct('guid')->count();
        return view('contentController.reports.usersReports', ['clicked'=>$this->clicker(5), 'data'=>$data]);
    }

    public function contentsReport(){
        $data = [];
        $data[0] = GeneralUserPost::all()->count();
        $data[1] = Contribution::sum('postapproved');
        $data[2] = Contribution::sum('postdeclined');
        return view('contentController.reports.contentsReports', ['clicked'=>$this->clicker(5), 'data'=>$data]);
    }

    public function saveContentsReport(Request $req){
        $data = [];
        $data[0] = GeneralUserPost::all()->count();
        $data[1] = Contribution::sum('postapproved');
        $data[2] = Contribution::sum('postdeclined');
        $chart = $req->chartData;
        $pdf = DomPDF::loadView('contentController.reports.contentsReportsPDF',['data'=>$data, 'chart'=>$chart]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 1000);
        // $pdf->setOption('no-stop-slow-scripts', true);
        // $pdf->setOption('enable-smart-shrinking', true);
        return $pdf->stream('content_report_'.Carbon::now()->timestamp.'.pdf');
    }

    public function contribution(Request $req){
        $data = [];
        $data[0] = Contribution::sum('postapproved');
        $data[1] = Contribution::select('postapproved')->where('ccid', $req->session()->get('username'))->first()->postapproved;
        $data[2] = Contribution::sum('postdeclined');
        $data[3] = Contribution::select('postdeclined')->where('ccid', $req->session()->get('username'))->first()->postdeclined;
        $data[4] = Contribution::sum('announcements');
        $data[5] = Contribution::select('announcements')->where('ccid', $req->session()->get('username'))->first()->announcements;
        $data[6] = Session::get('username');
        return view('contentController.contribution.contribution', ['clicked'=>$this->clicker(6), 'data'=>$data]);
    }

    public function saveContribution(Request $req){
        $data = [];
        $data[0] = Contribution::sum('postapproved');
        $data[1] = Contribution::select('postapproved')->where('ccid', $req->session()->get('username'))->first()->postapproved;
        $data[2] = Contribution::sum('postdeclined');
        $data[3] = Contribution::select('postdeclined')->where('ccid', $req->session()->get('username'))->first()->postdeclined;
        $data[4] = Contribution::sum('announcements');
        $data[5] = Contribution::select('announcements')->where('ccid', $req->session()->get('username'))->first()->announcements;
        $data[6] = Session::get('username');
        $chart = $req->chartData;
        // $pdf = PDF::loadView('contentController.contribution.contributionPDF', ['data'=>$data]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 3000);
        // $pdf->setOption('no-stop-slow-scripts', true);
        // $pdf->setOption('enable-smart-shrinking', true);
        //$pdf = DomPDF::loadView('contentController.contribution.contributionPDF', ['data'=>$data])->setOptions(['isPhpEnabled'=>true,'isJavascriptEnabled'=>true, 'isHtml5ParserEnabled'=>true]);
        $pdf = DomPDF::loadView('contentController.contribution.contributionPDF', ['data'=>$data, 'chart'=>$chart]);
        return $pdf->stream('contribution_report_'.Carbon::now()->timestamp.'.pdf');
    }
}
