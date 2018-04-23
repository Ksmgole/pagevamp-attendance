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

    public function login()
    {
        return view('auth.login');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }

    public function adminDashboard()
    {
        return view('layout.admin');
    }
    public function memberDashboard()
    {
        return view('layout.member');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();
            if ($user->is_admin) {
                return redirect()->route('adminDashboard');
            }
            return redirect()->route('memberDashboard');
        }
        return redirect()->route('login')->with('message', '<div class ="alert alert-danger"><strong>User is not registered yet</strong></div>');

    }

    public function attendance(){
        return view('attendance.attendanceList');
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

    public function editMember($id)
    {
        $user = User::find($id);
        return View::make('admin.member.edit', ['user' => $user]);
    }

    public function updateMember(Request $request, $id)
    {
        $user = User::find($id);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->phone_no = $request->get('contact');
        $user->address = $request->get('address');
        $user->citizenship_no = $request->get('citizenship');
        $user->pan_no = $request->get('pan');
        $user->save();
        return redirect()->route('show.member');
    }

}
