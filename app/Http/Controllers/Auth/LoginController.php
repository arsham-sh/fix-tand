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
            'number' => 'required|string',
        ]);

        // Find user by both username and number for more security
        $user = User::where('number', $credentials['number'])->where('username', $credentials['username'])->first();

        if ($user) {
            Auth::login($user);

            return redirect()->route('index')->with('success', 'خوش آمدید!');
        } else {
            return back()->withErrors([
                'error' => 'شماره موبایل یا نام کاربری اشتباه است.',
            ])->withInput();
        }
    }
}
