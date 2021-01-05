<?php

use App\Http\Controllers\contentControllerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\accountControllerController;
use App\Http\Controllers\generalUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');   
Route::get('/guregistrationform', [registrationController::class,'registrationform'])->name('generalUser.registrationform');
Route::post('/guregistrationform', [registrationController::class,'signup'])->name('generalUser.signup');

Route::group(['middleware' => ['sess']], function () {
    Route::group(['middleware' => ['ContentController']], function () {
        Route::get('/contentcontroller', 'contentControllerController@home')->name('contentController.home');

        Route::get('/contentcontroller/post/request', 'contentControllerController@postRequest')->name('contentController.postRequest');
        Route::get('/contentcontroller/post/approve/{id}', 'contentControllerController@approvePost')->name('contentController.approvePost');
        Route::get('/contentcontroller/post/decline/{id}', 'contentControllerController@declinePost')->name('contentController.declinePost');
        Route::get('/contentcontroller/analyzeposter/{pid}/{gid}', 'contentControllerController@analyzePoster')->name('contentController.analyzePoster');
        Route::post('/contentcontroller/analyzeposter/{pid}/{gid}', 'contentControllerController@analyzePosterAction');
        Route::get('/contentcontroller/banforever/{pid}/{gid}', 'contentControllerController@banForEver')->name('contentController.banForEver');

        Route::get('/contentcontroller/action/request/submitted', 'contentControllerController@submittedRequestsForAction')->name('contentController.submittedRequestsForAction');

        Route::get('/contentcontroller/announcement', 'contentControllerController@announcement')->name('contentController.announcement');
        Route::get('/contentcontroller/announcement/create', 'contentControllerController@createAnnouncement')->name('contentController.createAnnouncement');
        Route::post('/contentcontroller/announcement/create', 'contentControllerController@storeAnnouncement');
        Route::get('/contentcontroller/announcement/update/{id}', 'contentControllerController@updateAnnouncement')->name('contentController.updateAnnouncement');
        Route::post('/contentcontroller/announcement/update/{id}', 'contentControllerController@storeUpdatedAnnouncement');
        Route::get('/contentcontroller/announcement/delete/{id}', 'contentControllerController@deleteAnnouncement')->name('contentController.deleteAnnouncement');
        Route::get('/contentcontroller/searchannouncement/{query}', 'contentControllerController@searchAnnouncement');

        Route::get('/contentcontroller/users', 'contentControllerController@users')->name('contentController.userList');
        Route::get('/contentcontroller/users/profile/{id}', 'contentControllerController@userProfile')->name('contentController.userProfile');
        Route::get('/contentcontroller/users/report/{id}', 'contentControllerController@userReportThroughAPI')->name('contentController.userReport');
        Route::get('/contentcontroller/searchusers/{query}', 'contentControllerController@searchUsers');
    
        Route::get('/contentcontroller/profile', 'contentControllerController@profile')->name('contentController.profile');
        Route::get('/contentcontroller/profile/update', 'contentControllerController@updateProfile')->name('contentController.updateProfile');
        Route::post('/contentcontroller/profile/update', 'contentControllerController@storeUpdatedProfile');
        Route::get('/contentcontroller/account', 'contentControllerController@account')->name('contentController.account');
        Route::post('/contentcontroller/account', 'contentControllerController@updateAccount');

        Route::get('/contentcontroller/reports', 'contentControllerController@reports')->name('contentController.reports');
        Route::get('/contentcontroller/reports/users', 'contentControllerController@usersReport')->name('contentController.usersReport');
        Route::get('/contentcontroller/reports/contents', 'contentControllerController@contentsReport')->name('contentController.contentsReport');
        Route::post('/contentcontroller/reports/contents', 'contentControllerController@saveContentsReport');

        Route::get('/contentcontroller/contribution', 'contentControllerController@contribution')->name('contentController.contribution');
        Route::post('/contentcontroller/contribution', 'contentControllerController@saveContribution');   
     });
  Route::group(['middleware' => ['AccountController']], function () {
        //account controller
        Route::get('/achome', [accountControllerController::class,'achome'])->name('accountController.achome');
        Route::get('/acgetmyinfo', [accountControllerController::class,'getmyinfo'])->name('accountController.getmyinfo');
        Route::get('/acupdateprofile', [accountControllerController::class,'updateprofile'])->name('accountController.updateprofile');
        Route::post('/acupdateprofile', [accountControllerController::class,'updateprofilesave'])->name('accountController.updateprofilesave');
        Route::get('/acdeactivateprofile', [accountControllerController::class,'deactivateprofile'])->name('accountController.deactivateprofile');
        Route::post('/acdeactivateprofile', [accountControllerController::class,'deactivateprofilesave'])->name('accountController.deactivateprofilesave');
        //text
        Route::get('/accreatetext', [accountControllerController::class,'createtext'])->name('accountController.createtext');
        Route::post('/accreatetext', [accountControllerController::class,'createtextsave'])->name('accountController.createtextsave');
        Route::get('/acviewtext', [accountControllerController::class,'viewtext'])->name('accountController.viewtext');
        Route::get('/acviewtextcc', [accountControllerController::class,'viewtextcc'])->name('accountController.viewtextcc');
        Route::get('/acviewtextgu', [accountControllerController::class,'viewtextgu'])->name('accountController.viewtextgu');
        //notice
        Route::get('/acviewnotice', [accountControllerController::class,'viewnotice'])->name('accountController.viewnotice');
        Route::get('/accreatenotice', [accountControllerController::class,'createnotice'])->name('accountController.createnotice');
        Route::post('/accreatenotice', [accountControllerController::class,'createnoticesave'])->name('accountController.createnoticesave');
        //report
        Route::get('/acreportgenerate', [accountControllerController::class,'reportgenerate'])->name('accountController.reportgenerate');
        Route::get('/acuserreportgenerate', [accountControllerController::class,'userreportgenerate'])->name('accountController.userreportgenerate');
        Route::get('/acnoticereportgenerate', [accountControllerController::class,'noticereportgenerate'])->name('accountController.noticereportgenerate');
        Route::get('/generaluserreportgenerate', [accountControllerController::class,'gureportgenerate'])->name('accountController.gureportgenerate');

        //admin
        Route::get('/acadminlist',[accountControllerController::class,'acadminlist'])->name('accountController.acadminlist');
        Route::get('/acsearchadmin',[accountControllerController::class,'acsearchadmin'])->name('accountController.acsearchadmin');
        
        //content controller
        Route::get('/accclist',[accountControllerController::class,'accclist'])->name('accountController.cclist');
        Route::get('/acsearchcc',[accountControllerController::class,'acsearchcc'])->name('accountController.acsearchcc');
        Route::get('/accreatecc',[accountControllerController::class,'createcc'])->name('accountController.createcc');
        Route::post('/accreatecc',[accountControllerController::class,'createccsave'])->name('accountController.createccsave');
        Route::get('/aceditcc/{id}',[accountControllerController::class,'editcc'])->name('accountController.editcc');
        Route::post('/aceditcc/{id}',[accountControllerController::class,'editccsave'])->name('accountController.editccsave');
        Route::get('/acdeletecc/{id}',[accountControllerController::class,'deletecc'])->name('accountController.deletecc');
        Route::post('/acdeletecc/{id}',[accountControllerController::class,'deleteccsave'])->name('accountController.deleteccsave');
        
        //general user
        Route::get('/acgulist',[accountControllerController::class,'acgulist'])->name('accountController.gulist');
        Route::get('/acsearchgu',[accountControllerController::class,'acsearchgu'])->name('accountController.acsearchgu');
        Route::get('/acdeletegu/{id}',[accountControllerController::class,'deletegu'])->name('accountController.deletegu');
        Route::post('/acdeletegu/{id}',[accountControllerController::class,'deletegusave'])->name('accountController.deletegusave');
        Route::get('/acbannedgu/{id}',[accountControllerController::class,'bannedgu'])->name('accountController.bannedgu');
        Route::post('/acbannedgu/{id}',[accountControllerController::class,'bannedgusave'])->name('accountController.bannedgusave');
        Route::get('/actemporarilyblockgu/{id}',[accountControllerController::class,'temporarilyblockgu'])->name('accountController.temporarilyblockgu');
        Route::post('/actemporarilyblockgu/{id}',[accountControllerController::class,'temporarilyblockgusave'])->name('accountController.temporarilyblockgusave');
        Route::get('/acverifygeneraluser',[accountControllerController::class,'verifygeneraluser'])->name('accountController.verifygeneraluser');
        Route::get('/acdeclineregrequest/{id}',[accountControllerController::class,'declineregrequest'])->name('accountController.declineregrequest');
        Route::post('/acdeclineregrequest/{id}',[accountControllerController::class,'declineregrequestsave'])->name('accountController.declineregrequestsave');
        Route::get('/acapproveregrequest/{id}',[accountControllerController::class,'approveregrequest'])->name('accountController.approveregrequest');

     });
  Route::group(['middleware' => ['GeneralUser']], function () {
        //guhome
        Route::get('/guhome', [generalUserController::class,'guhome'])->name('generalUser.home');

        Route::get('/profile', [generalUserController::class,'profile'])->name('generalUser.profile');

        Route::get('/profiledelete', [generalUserController::class,'profiledelete'])->name('generalUser.profiledelete');
        Route::post('/profiledelete', [generalUserController::class,'profiledestroy']);

        Route::get('/profileedit', [generalUserController::class,'profileedit'])->name('generalUser.profileedit');
        Route::post('/profileedit', [generalUserController::class,'profileupdate']);
        
        Route::get('/allpost', [generalUserController::class,'allpost'])->name('generalUser.allpost');
        Route::get('/searchanypost', [generalUserController::class,'searchanypost'])->name('generalUser.searchanypost');
        Route::get('/searchgu', [generalUserController::class,'searchgu'])->name('generalUser.searchgu');
        Route::post('/searchgu', [generalUserController::class,'searchguresult'])->name('generalUser.searchguresult');

        Route::get('/sendtext', [generalUserController::class,'sendtext'])->name('generalUser.sendtext');
        Route::post('/sendtext', [generalUserController::class,'sendtextsave'])->name('generalUser.sendtextsave');

        Route::get('/receivetext', [generalUserController::class,'receivetext'])->name('generalUser.receivetext');

        Route::get('/viewnotice', [generalUserController::class,'viewnotice'])->name('generalUser.viewnotice');

        Route::get('/postnewcontent', [generalUserController::class,'postnewcontent'])->name('generalUser.postnewcontent');
        Route::post('/postnewcontent', [generalUserController::class,'postnewcontentsave'])->name('generalUser.postnewcontentsave');

        Route::get('/gumypost', [generalUserController::class,'mypost'])->name('generalUser.mypost');
        Route::get('/gupendingpostlist', [generalUserController::class,'pendingpostlist'])->name('generalUser.pendingpostlist');
        Route::get('/gurequesttoapprove', [generalUserController::class,'requesttoapprove'])->name('generalUser.requesttoapprove');
        Route::post('/gurequesttoapprove', [generalUserController::class,'requesttoapprovesend'])->name('generalUser.requesttoapprovesend');
        

        //request to check id problem
        Route::get('/requesttocheckidproblem', [generalUserController::class,'requesttocheckidproblem'])->name('generalUser.requesttocheckidproblem');
        Route::post('/requesttocheckidproblem', [generalUserController::class,'requesttocheckidproblemsend'])->name('generalUser.requesttocheckidproblemsend');

        //posts
        Route::get('/gumypostlist', [generalUserController::class,'mypostlist'])->name('generalUser.mypostlist');
        Route::get('/gueditpost/{id}', [generalUserController::class,'editpost'])->name('generalUser.editpost');
        Route::post('/gueditpost/{id}', [generalUserController::class,'editpostsave'])->name('generalUser.editpostsave');

        Route::get('/gudeletepost/{id}', [generalUserController::class,'deletepost'])->name('generalUser.deletepost');
        Route::post('/gudeletepost/{id}', [generalUserController::class,'deletepostsave'])->name('generalUser.deletepostsave');   
        

        //report
        Route::get('/gureport', [generalUserController::class,'report'])->name('generalUser.report'); 
        Route::get('/gupostreport', [generalUserController::class,'postreport'])->name('generalUser.postreport');
        Route::get('/gunoticereport', [generalUserController::class,'noticereport'])->name('generalUser.noticereport');
    });
});


Route::group(['middleware' => ['sss','verifyadmin']], function () {

    Route::get('Admin/','adminControllerad@Viewhomead')->name('Admin.Viewhomead');
    Route::get('Admin/deletepost/{id}','adminControllerad@deletegupostad')->name('Admin.deletegupostad');

    Route::get('Admin/post/','adminControllerad@Viewpostad')->name('Admin.Viewpostad');
    Route::post('Admin/post/','adminControllerad@submitpost')->name('Admin.submitpostad');

    Route::get('Admin/insert','adminControllerad@Viewinsertad')->name('Admin.Viewinsertad');
    Route::post('Admin/insert','adminControllerad@Viewinsertpostad')->name('Admin.Viewinsertadpost');

    Route::get('Admin/pendingManagement','adminControllerad@pendingmanagement')->name('Admin.pendingmanagement');
    Route::get('Admin/Approve/ac{id}','adminControllerad@approveac')->name('Admin.approveac');
    Route::get('Admin/Approve/cc{id}','adminControllerad@approvecc')->name('Admin.approvecc');

    Route::get('Admin/PendingPostReq/','adminControllerad@ViewPendingpostad')->name('Admin.ViewPendingPostReqad');
    Route::get('Admin/PendingPostReq/Approve/{id}','adminControllerad@approvepenpostreq')->name('Admin.approvepenpostreq');
    Route::get('Admin/PendingPostReq/Delete/{id}','adminControllerad@deletepenpostreq')->name('Admin.deletepenpostreq');

    Route::get('Admin/PendingSignupReq','adminControllerad@ViewPendingSignupReqad')->name('Admin.ViewPendingSignupReqad');
    Route::get('Admin/PendingSignupReq/Approve/{id}','adminControllerad@approvepensignupreq')->name('Admin.approvepensignupreq');
    Route::get('Admin/PendingSignupReq/Delete/{id}','adminControllerad@deletepensignupreq')->name('Admin.deletepensignupreq');


    Route::get('Admin/Adminlist/','adminControllerad@ViewAdminlistad')->name('Admin.ViewAdminlistad');


    Route::get('Admin/ACList','adminControllerad@ViewACListad')->name('Admin.ViewACListad');
    Route::get('Admin/ACList/blockac{id}','adminControllerad@blockac')->name('Admin.blockac');
    Route::get('Admin/ACList/deleteac{id}','adminControllerad@deleteac')->name('Admin.deleteac');


    Route::get('Admin/CCList/','adminControllerad@ViewCCListad')->name('Admin.ViewCCListad');
    Route::get('Admin/CCList/blockcc{id}','adminControllerad@blockcc')->name('Admin.blockcc');
    Route::get('Admin/CCList/deleteacc{id}','adminControllerad@deletecc')->name('Admin.deletecc');


    Route::get('Admin/Userlist/','adminControllerad@ViewUserlistad')->name('Admin.ViewUserlistad');
    Route::get('Admin/Userlist/blockgu{id}','adminControllerad@blockgu')->name('Admin.blockgu');
    Route::get('Admin/Userlist/deleteagu{id}','adminControllerad@deletegu')->name('Admin.deletegu');


    Route::get('Admin/BlockList','adminControllerad@ViewBlockListad')->name('Admin.ViewBlockListad');
    Route::get('Admin/BlockList/deleteblkac{id}','adminControllerad@deleteblockac')->name('Admin.deleteblockac');
    Route::get('Admin/BlockList/unblockac{id}','adminControllerad@unblockac')->name('Admin.unblockac');
    Route::get('Admin/BlockList/deleteblkcc{id}','adminControllerad@deleteblockcc')->name('Admin.deleteblockcc');
    Route::get('Admin/BlockList/unblockcc{id}','adminControllerad@unblockcc')->name('Admin.unblockcc');
    Route::get('Admin/BlockList/deleteblkgu{id}','adminControllerad@deleteblockgu')->name('Admin.deleteblockgu');
    Route::get('Admin/BlockList/unblockgu{id}','adminControllerad@unblockgu')->name('Admin.unblockgu');

    Route::get('Admin/Profile/','adminControllerad@ViewProfilead')->name('Admin.ViewProfilead');


    Route::get('Admin/notification/Create{id}','adminControllerad@ViewCreateNotificationad')->name('Admin.ViewCreateNotificationad');
    Route::post('Admin/notification/Create{id}','adminControllerad@ViewCreateNotificationpostad')->name('Admin.ViewCreateNotificationpostad');

    Route::get('Admin/notification','adminControllerad@ViewNotificationad')->name('Admin.ViewNotificationad');
    Route::get('Admin/notification/Edit{id}','adminControllerad@Editexsistingnotice')->name('Admin.Editexsistingnotice');
    Route::post('Admin/notification/Edit{id}','adminControllerad@Editexsistingnoticesub')->name('Admin.Editexsistingnoticesub');


    Route::get('Admin/notification/delete{id}','adminControllerad@deleteexsistingnotice')->name('Admin.deleteexsistingnotice');

    Route::get('Admin/Report/','adminControllerad@ViewReportad')->name('Admin.ViewReportad');
    Route::get('Admin/editProfile/','adminControllerad@VieweditProfilead')->name('Admin.VieweditProfilead');
    Route::post('Admin/editProfile/','adminControllerad@VieweditProfileadsub')->name('Admin.VieweditProfileadsub');
    Route::get('Admin/Changepass','adminControllerad@Changepass')->name('Admin.Changepass');
    Route::post('Admin/Changepass','adminControllerad@Changepasssub')->name('Admin.Changepasssub');

    Route::get('Admin/searchadmin/{key}','adminControllerad@searchadmin')->name('Admin.searchadmin');
    Route::get('Admin/Searchcclist/{key}','adminControllerad@searchcc')->name('Admin.searchcc');
    Route::get('Admin/Searchuser/{key}','adminControllerad@searchuser')->name('Admin.searchuser');
    Route::get('Admin/Searchac/{key}','adminControllerad@searchac')->name('Admin.searchac');
    Route::get('Admin/SearchPost/{key}','adminControllerad@searchpost')->name('Admin.searchpost');
    Route::get('Admin/Convert/pdf','adminControllerad@convertpdf')->name('Admin.convertpdf');

});