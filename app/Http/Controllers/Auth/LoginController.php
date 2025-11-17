<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    public function sendOtp(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'number' => 'required|integer',
        ]);

        // Attempt to login
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            Auth::login($credentials);
            
            // return redirect()->route('otp')->with('موفق', 'اطلاعات با موفقیت ثبت شد!');
            return redirect()->intended(route('index'))->with('succes', 'خوش آمدید!');
        }
        else
        {
            return back()->with('error', 'شماره موبایل یا رمز عبور اشتباه است.');
        }
    }
}
