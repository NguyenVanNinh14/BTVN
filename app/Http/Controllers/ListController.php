<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function list(){

        if(!Auth::check()){
            return redirect('login');
        }
        $user = Auth::user();
        return view('list', compact('user'));
    }
}
