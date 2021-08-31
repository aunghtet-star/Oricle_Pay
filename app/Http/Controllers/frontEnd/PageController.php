<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('frontEnd.home');
    }
    public function profile(){
        $user = Auth::guard('web')->user();
        return view('frontEnd.profile',compact('user'));
    }
    public function updatePassword(){
        return view('frontEnd.updatePassword');
    }
}
