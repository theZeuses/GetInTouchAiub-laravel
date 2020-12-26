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
        Route::get('/achome', [accountControllerController::class,'achome'])->name('accountController.achome');
        Route::get('/acadminlist',[accountControllerController::class,'acadminlist'])->name('accountController.acadminlist');
        Route::post('/acsearchadmin',[accountControllerController::class,'acsearchadmin'])->name('accountController.acsearchadmin');
    });
});