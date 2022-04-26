<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function login() {
        return view('pages.account.login');
    }


    public function loginUser(Request $request) {


        //TODO Login function is Work In Process (WIP)


        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $credentials = $request->only('email', 'password');


        // The 'email' and 'password' need to match Member model's $fillable
        // The $request->email and $request->password is from login.blade.php
        if( Auth::attempt($credentials) ){
            $request->session()->regenerate();
            return redirect()->intended();
        }
        return back()->withErrors(['loginError' => 'Wrong username or password!']);
    }

    public function registration() {
        return view('pages.account.regist');
    }

    public function registerUser(Request $request) {

        $request->validate([
            'fname' => ['required', 'regex:/^[A-Za-z\s]{1,19}+$/'],
            'lname' => ['required', 'regex:/^[A-Za-z]{1,19}+$/'],
            'email' => ['required', 'email', 'unique:members,email'],
            'phoneNum' => ['required', 'digits:8'],
            'password' => ['required', Password::min(8)->letters()],
            'dob' => ['required'],
            'gender' => ['required', 'in:male,female,n/a']
        ]);

        $member = new Member();

        $member->first_name = $request->fname;
        $member->last_name = $request->lname;
        $member->email = $request->email;
        $member->phone_no  = $request->phoneNum;
        $member->password = Hash::make($request->password);
        $member->dob  = $request->dob;
        $member->gender  = $request->gender;

        $res = $member->save();
        if($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }

    }
}
