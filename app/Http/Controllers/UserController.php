<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



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
    if(Auth::attempt($request->only(['email','password']))){
        $user= Auth::user();
        if($user->is_admin){
            return redirect()->route('admin.dashboard');
        }
        return redirect('/member');
    }
    }

    public function displayMembers (){
        return view ('adminoption.displayMember');
    }
    public function display (){

        $user = User::all();
        return view('displayMember')->with('users', $user);
    }


    public function createMember (){
        return view ('adminoption.createMember');
    }
    public function insertMember(Request $request){
        $user = new User();
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();

        return Redirect::back();

    }
}
