<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\accountControllerController;
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

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'verify']);
Route::get('/logout', [logoutController::class,'index']);

Route::group(['middleware' => ['sess']], function () {
    Route::group(['middleware' => ['AccountController']], function () {
        //account controller
        Route::get('/achome', [accountControllerController::class,'achome'])->name('accountController.achome');
        Route::get('/acgetmyinfo', [accountControllerController::class,'getmyinfo'])->name('accountController.getmyinfo');
        Route::get('/acupdateprofile', [accountControllerController::class,'updateprofile'])->name('accountController.updateprofile');
        Route::post('/acupdateprofile', [accountControllerController::class,'updateprofilesave'])->name('accountController.updateprofilesave');
        //admin
        Route::get('/acadminlist',[accountControllerController::class,'acadminlist'])->name('accountController.acadminlist');
        Route::get('/acsearchadmin',[accountControllerController::class,'acsearchadmin'])->name('accountController.acsearchadmin');
        //content controller
        Route::get('/accclist',[accountControllerController::class,'accclist'])->name('accountController.cclist');
        Route::get('/acsearchcc',[accountControllerController::class,'acsearchcc'])->name('accountController.acsearchcc');
        //general user
        Route::get('/acgulist',[accountControllerController::class,'acgulist'])->name('accountController.gulist');
        Route::get('/acsearchgu',[accountControllerController::class,'acsearchgu'])->name('accountController.acsearchgu');

    });
});