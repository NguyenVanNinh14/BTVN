<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        $list = Posts::all()->toArray();
        return view('list')->with('list', $list);
    }

    //them
    public function create(){
        return view('create');
    }

    public function save(Request $request){
        $post = new Posts();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->save();
        return redirect('list');
        }

    // xóa
    public function update($id){
            $update = Posts::find($id)->toArray();
            return view('update', compact('update'));
        }

        public function save2(Request $request){
            $post =  Posts::find($request->id);
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->content = $request->content;
            $post->save();
            return redirect('list');
            }

    public function delete($id){
        Posts::find($id)->delete();
        return redirect('list');
        }
}
