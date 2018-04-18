<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    //

    public function loginPage()
    {
        return view('auth.login');

    }

    public function adminDashboard()
    {
        return view('attendance.admin');
    }

    public function memberDashboard()
    {
        return view('layout.member');
    }

    public function checkLogin(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();
            if ($user->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            return redirect('/member');
        }
    }

    public function createMember()
    {
        return view('admin.member.create');
    }

    public function saveMember(Request $request)
    {
        $user = new User();
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone_no = $request->get('contact');
        $user->address = $request->get('address');
        $user->citizenship_no = $request->get('citizenship');
        $user->pan_no = $request->get('pan');
        $user->save();
        return Redirect::back();
    }

    public function showMember()
    {
        $user = User::all();
        return view('admin.member.show')->with('users', $user);
    }

    public function editMember()
    {
        $user = User::find(1);
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->email = Input::get('email');
        return View::make('admin.member.display')->compact('user');
    }


}
