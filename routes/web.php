<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('auth.login-register');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/admin/dashboard', [DataController::class, 'dashboard']);

Route::resource('users', UserController::class);
Route::resource('undangan', DataController::class);

    Route::post('/storeUndangan', [DataController::class, 'store']);
    
    Route::post('/storeUser', [UserController::class, 'store']);
    Route::get('/deleteuser/{id}', [UserController::class, 'deleteUser']);
    Route::get('/deletealluser/{id}', [UserController::class, 'deleteAllUser']);

Auth::routes();
