<?php

use App\Http\Controllers\contentControllerController;
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

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');    

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
});