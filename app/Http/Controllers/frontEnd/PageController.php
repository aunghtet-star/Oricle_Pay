<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\updatePassword;

class PageController extends Controller
{
    public function home()
    {
        $user = Auth::guard('web')->user();
        return view('frontEnd.home',compact('user'));
    }
    public function profile(){
        $user = Auth::guard('web')->user();
        return view('frontEnd.profile',compact('user'));
    }
    public function updatePassword(){
        return view('frontEnd.updatePassword');
    }
    public function updatePasswordStore(updatePassword $request){
        
        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $user = Auth::guard('web')->user();

        if (Hash::check($old_password, $user->password)) {
            $user->password = Hash::make($new_password);
            $user->update();
            
            return redirect()->route('profile')->with('update','successfully updated');
        }
        return back()->withErrors(['old_password'=>'Your old password is not correct'])->withInput();
    }

    public function wallet(){
        $user = Auth::guard('web')->user();
        return view('frontEnd.wallet',compact('user'));
    }
}
