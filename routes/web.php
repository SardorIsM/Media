<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrController;
use App\Http\Controllers\UserAuthController;

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
})->name('welcome');
Route::get('/registration', function () {
    return view('regist');
})->name('registr');
Route::get('/my-page/{id}', [RegistrController::class, 'myPage'])->name('my-page');
Route::get('/my-page/{id}/update', [RegistrController::class, 'updateMyPage'])->name('my-page-update');
Route::post('/my-page/{id}/update', [RegistrController::class, 'updateMyPageSubmit'])->name('my-page-update-submit');
Route::get('/registration/society/{id}', [RegistrController::class, 'persona'])->name('registr-persona');
Route::get('/registration/society', [RegistrController::class, 'society'])->name('registr-society');
Route::post('/registration/submit', [RegistrController::class, 'submit'])->name('registr-submit');



Route::get('/login',[UserAuthController::class, 'login'])->name('login-page');
Route::post('/check',[UserAuthController::class, 'check'])->name('check-page');
Route::get('/profile',[UserAuthController::class, 'profile']);
Route::get('/logout',[UserAuthController::class, 'logout']);

