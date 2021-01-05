<?php

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

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'verify']);
Route::get('/logout', [logoutController::class,'index']);
Route::get('/guregistrationform', [registrationController::class,'registrationform'])->name('generalUser.registrationform');
Route::post('/guregistrationform', [registrationController::class,'signup'])->name('generalUser.signup');

Route::group(['middleware' => ['sess']], function () {
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