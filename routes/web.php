<?php

use App\Http\Controllers\CounselController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\ExpertInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'redirect'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('counsels',CounselController::class);

Route::resource('expert_infos',ExpertInfoController::class);
Route::get('expert_info/show_all',[ExpertInfoController::class , 'showAll'])->name('all.exp.with.info');
// Route::get('expert_info/search',[ExpertInfoController::class , 'findExpOrCon'])->name('find.Expert.Or.Counsel');
Route::get('expert_info/search/expert',[ExpertInfoController::class , 'findExp'])->name('find.Expert');
Route::get('expert_info/search/counsel',[ExpertInfoController::class , 'findCon'])->name('find.Counsel');
Route::get('expert_info/show_ex_info/{id}',[ExpertInfoController::class , 'showExpInfo'])->name('show.expert.info');
Route::get('expert/users',[UserController::class,'expert'])->name('expert');

Route::resource('Dates',DateController::class);

Route::resource('wallets',WalletController::class);
Route::get('wallet/show/all',[WalletController::class,'showAll'])->name('show.all');
Route::get('wallet/transfer/view',[WalletController::class,'transferView'])->name('transferView');
Route::put('wallet/transfer',[WalletController::class,'transfer'])->name('transfer');

Route::resource('reservations' ,ReservationController::class);
Route::get('expert/reservations',[DateController::class,'expertReservation'])->name('expertReservation');

Route::put('change/Status/Date/{id}' ,[DateController::class,'changeStatusD'])->name('changeStatusD');

