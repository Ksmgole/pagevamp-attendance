<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login (){
        return view ('auth.login');

    }
    public function admin_dashboard (){
        return view ('layout.admin');
    }

    public function member_dashboard (){
        return view ('layout.member');
    }
    public function checklogin(){


    }
}