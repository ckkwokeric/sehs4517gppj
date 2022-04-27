<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    // Display the login page
    public function login() {
        return view('pages.account.login');
    }


    // Logic for logging in the user
    public function loginUser(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if( auth()->attempt($formFields) ){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['loginError' => 'Wrong email or password!'])->onlyInput('email');
    }


    // Logic for logging out the user
    public function logoutUser(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }


    // Display the registration page
    public function registration() {
        return view('pages.account.regist');
    }


    // Logic for user to register an account
    public function registerUser(Request $request) {

        $formFields = $request->validate([
            'fname' => ['required', 'regex:/^[A-Za-z\s]{1,19}+$/'],
            'lname' => ['required', 'regex:/^[A-Za-z]{1,19}+$/'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phoneNum' => ['required', 'digits:8'],
            'password' => ['required', Password::min(8)->letters()],
            'dob' => ['required'],
            'gender' => ['required', 'in:male,female,n/a']
        ]);

         // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create([
            'first_name' => $formFields['fname'],
            'last_name' => $formFields['lname'],
            'email' => $formFields['email'],
            'phone_no' => $formFields['phoneNum'],
            'password' => $formFields['password'],
            'dob' => $formFields['dob'],
            'gender' => $formFields['gender']
        ]);

        // $member->first_name = $request->fname;
        // $member->last_name = $request->lname;
        // $member->email = $request->email;
        // $member->phone_no  = $request->phoneNum;
        // $member->password = Hash::make($request->password);
        // $member->dob  = $request->dob;
        // $member->gender  = $request->gender;

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');

    }
}
