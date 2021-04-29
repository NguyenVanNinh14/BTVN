<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListController;


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


Route::get('/login', ([AuthController::class, 'showlogin']))->middleware('guest')->name('login');
Route::post('/checklogin', ([AuthController::class, 'checklogin']))->name('checklogin');

Route::get('/list', ([ListController::class, 'list']))->middleware('auth')->name('list');

Route::get('/logout', ([ListController::class, 'logout']))->middleware('auth')->name('logout');

