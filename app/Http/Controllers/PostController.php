<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use App\Http\Requests\RequestPost;

class PostController extends Controller
{
    public function index(){
        $list = Posts::query()->paginate(1);
        return view('list',compact('list'));
    }

    //them
    public function create(){
        return view('create');
    }

    public function save(RequestPost $request){
        // Posts::query()->create($request->only('title', 'slug', 'content'));
        $post = new Posts();
        $post->key_post = $request->key_post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->save();
        return redirect('list');
        }

    // sua
    public function update($id){
            // $update = Posts::query()->findOrFail($id);
            $update = Posts::find($id);
            return view('update', compact('update'));
        }

        public function save2(RequestPost $request){
            $post =  Posts::find($request->id);
            $post->key_post = $request->key_post;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->content = $request->content;
            $post->save();
            return redirect('list');
            }
    //xoa
    public function delete($id){
        // Posts::destroy($id);
        Posts::find($id)->delete();
        return redirect('list');
        }
}
