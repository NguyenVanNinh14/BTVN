<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bai3Controller;

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

Route::get('/bai3',[Bai3Controller::class, 'bai3']);
Route::get('/search',[Bai3Controller::class, 'search']);

