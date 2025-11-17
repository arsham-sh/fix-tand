<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Otp;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|min:4|max:255',
            'username' => 'required|string|min:4|max:255|unique:users',
            'number' => 'required|integer|min:11|max:255|unique:users',
        ]);

        $user = User::create([
            'name' => $validate['name'],
            'username' => $validate['username'],
            'number' => $validate['number'],
        ]);
            
        if ($user) {
            $request->session()->regenerate();
            // return redirect()->route('otp')->with('موفق', 'اطلاعات با موفقیت ثبت شد!');
            Auth::login($user);
            return redirect()->intended(route('index'))->with('success', 'اطلاعات با موفقیت ثبت شد!');
        } else {
            return back()->with('error', 'اطلاعات ثبت نشد.');
        }

        // $otpCode = rand(10000, 99999);

        // $otpRecord = Otp::create([
        //     'user_id' => $user->id,
        //     'otp_code' => $otpCode,
        //     'expires_at' => now()->addMinutes(10),
        // ]);
    }
}
