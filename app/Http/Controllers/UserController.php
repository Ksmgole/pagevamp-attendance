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
<<<<<<< HEAD
    public function adminDashboard (){
=======
    public function admin_dashboard (){
>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add
        return view ('attendance.admin');
    }

    public function memberDashboard (){
        return view ('layout.member');
    }
<<<<<<< HEAD
    public function checkLogin(Request $request){
    if(Auth::attempt($request->only(['$email','$password']))){
        $user= Auth::user();
        if($user->is_admin){
            return redirect()->route('admin.dashboard');
        }
        return redirect('/member');
    }
=======

    public function postLogin(Request $request){

        if(Auth::attempt($request->only(['email','password']))) {
            $user = Auth::user();
            if($user->is_admin) {
                return redirect('/admin');
            }

            return redirect('member');
        }
>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add

    }
}
