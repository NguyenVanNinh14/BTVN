<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai3Controller extends Controller
{
    public function bai3(){

        return view('bai3');
    }
    public function search(Request $request){

        $search = DB::table('bai3')->where('title', 'like', '%.$request->key.%')->orWhere('content', 'like' ,'%.$request->key.%')->get();
        return view('search', compact('search'));
    }
}
