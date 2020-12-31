<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\accountControllerController;
use App\Http\Controllers\generalUserController;
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
    Route::group(['middleware' => ['GeneralUser']], function () {
        //guhome
        Route::get('/guhome', [generalUserController::class,'guhome'])->name('generalUser.home');
        Route::get('/profile', [generalUserController::class,'profile'])->name('generalUser.profile');
         Route::get('/profiledelete/{guid}', [generalUserController::class,'profiledelete'])->name('generalUser.profiledelete');
        Route::post('/profiledelete/{guid}', [generalUserController::class,'profiledestroy']);
    });
});