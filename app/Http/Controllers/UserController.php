<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function loginPage (){
        return view ('auth.login');

    }
    public function adminDashboard (){
        return view ('attendance.admin');
    }

    public function memberDashboard (){
        return view ('layout.member');
    }
    public function checkLogin(Request $request){
    if(Auth::attempt($request->only(['$email','$password']))){
        $user= Auth::user();
        if($user->is_admin){
            return redirect()->route('admin.get');
        }
        return redirect('/member');
    }

    }
}