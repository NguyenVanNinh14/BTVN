<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Posts;

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


    //them
    $post = new Posts();
    $post->title = 'huy';
    $post->slug = 'huy';
    $post->content = 'huy';
    $post ->save();
    dd($post);

    //lay ra
    // lay ra het
    $post = Posts::query()->get();
    //lay theo id
    $user = DB::table('post')->whereIn('id', [2])->get();
    dd($post);


    //sua
    $post = Posts::query()->find(1);
    $post->title = 'hung';
    $post->save();
    dd($post);

    //xoa
    //xoa theo id
    Posts::destroy([1]);
    //xoa ko theo id
    $post = Posts::query()->where('slug', 'ninh')->delete();
    $post->save();



    return view('welcome');
});
Route::get('/home',[HomeController::class, 'index']);

