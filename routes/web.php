<?php

use Illuminate\Support\Facades\Route;

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


Route::get('login/','loginController@viewlogin')->name('viewlogin');
Route::post('login/','loginController@verifyuser');
Route::get('logout/','loginController@logout')->name('logout.logout');

Route::group(['middleware' => ['sess','verifyadmin']], function () {

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
