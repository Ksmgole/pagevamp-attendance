<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function loginPage (){
        return view ('auth.login');

    }
    public function admin_dashboard (){
        return view ('attendance.admin');
    }

    public function member_dashboard (){
        return view ('layout.member');
    }

    public function postLogin(Request $request){

        if(Auth::attempt($request->only(['email','password']))) {
            $user = Auth::user();
            if($user->is_admin) {
                return redirect('/admin');
            }

            return redirect('member');
        }

    }
}
