<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai3Controller extends Controller
{
    public function bai3(){

        return view('bai3');
    }
    public function search(Request $request){
        $bai3 = DB::table('bai3')->where('title', 'like', '%T%')->orWhere('content', 'like' ,'%C%')->get();
    }
}
