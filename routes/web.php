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

        Route::get('/sendtext', [generalUserController::class,'sendtext'])->name('generalUser.sendtext');
        Route::post('/sendtext', [generalUserController::class,'sendtextsave'])->name('generalUser.sendtextsave');

        Route::get('/receivetext', [generalUserController::class,'receivetext'])->name('generalUser.receivetext');

        Route::get('/viewnotice', [generalUserController::class,'viewnotice'])->name('generalUser.viewnotice');

        Route::get('/postnewcontent', [generalUserController::class,'postnewcontent'])->name('generalUser.postnewcontent');
        Route::post('/postnewcontent', [generalUserController::class,'postnewcontentsave'])->name('generalUser.postnewcontentsave');

    });
});