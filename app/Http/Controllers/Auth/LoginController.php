<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
            'number' => 'required|digits:11',
        ],[
            'username.required' => 'لطفا نام کاربری خود را وارد کنید',
            'username.string' => 'نام کاربری باید به صورت متن باشد.',

            'number.required' => 'لطفا شماره موبایل خود را وارد کنید',
            'number.digits' => 'شماره موبایل شما اشتباه است.',
        ]);

        // Find user by both username and number for more security
        $user = User::where('number', $credentials['number'])->where('username', $credentials['username'])->first();

        if ($user) {
            Auth::login($user);

            return redirect()->route('index')->with('success', 'خوش آمدید!');
        } else {
            return back()->with('error','شماره موبایل یا نام کاربری اشتباه است.',);
        }
    }
}
