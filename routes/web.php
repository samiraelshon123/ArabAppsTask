<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('register', [RegisterController::class, 'create'])
->name('register');

Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'create'])
->name('login');

Route::post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/', [UserInfoController::class, 'generalInfo'])->name('generalInfo');
    Route::post('/generalInfo', [UserInfoController::class, 'storeGeneralInfo'])->name('generalInfo.submit');

    Route::get('/personalInfo', [UserInfoController::class, 'personalInfo'])->name('personalInfo');
    Route::post('/personalInfo', [UserInfoController::class, 'storePersonalInfo'])->name('personalInfo.submit');

    Route::get('/technicalInfo', [UserInfoController::class, 'technicalInfo'])->name('technicalInfo');
    Route::post('/technicalInfo', [UserInfoController::class, 'storeTechnicalInfo'])->name('technicalInfo.submit');

    Route::get('/summary', [UserInfoController::class, 'summary'])->name('summary');
    Route::post('/summary', [UserInfoController::class, 'storeSummary'])->name('summary.submit');

});
