<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ResetPassword;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == '2') {
                return redirect()->intended('admin/menu');
            } elseif (Auth::user()->is_role == '1') {
                return redirect()->intended('scholar/menu');
            } elseif (Auth::user()->is_role == '0') {
                return redirect()->intended('applicant/menu');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter the correct credentials');
        }
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function registration_post(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'campus' => 'required',
        ]);

        $user = new User;
        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->campus = trim($request->campus);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('/')->with('success', 'Registered successfully.');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function forgot_post(Request $request)
    {
        $count = User::where('email', '=', $request->email)->count();
        if ($count > 0) {
            $user = User::where('email', '=', $request->email)->first();
            // $user->remember_token = Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'Password reset link sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Email not found in the system.');
        }
    }

    public function getReset(Request $request, $token)
    {
        // dd($token);
        $user = User::where('remember_token', '=', $token);
        if ($user->count() == 0) {
            abort(403);
        }

        $user = $user->first();
        $data['token'] = $token;

        return view('auth.reset', $data);
    }

    public function postReset($token, ResetPassword $request)
    {
        $user = User::where('remember_token', '=', $token)->first();

        if (!$user) {
            abort(403);
        }

        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('/')->with('success', 'Password successfully reset.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
