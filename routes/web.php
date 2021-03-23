<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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
    return view('alo');
});

Route::get('/login', [Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [Auth\LoginController::class, 'login'])->name('admin.login');

Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth', 'admin']], function () {
        Route::get('/home', [Auth\HomeController::class, 'index'])->name('admin.home');
    });
});