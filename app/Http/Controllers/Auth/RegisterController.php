<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:4|max:20',
            'username' => 'required|string|min:4|max:15|unique:users',
            'number' => 'required|digits:11|unique:users',
        ], [
            'name.required' => 'لطفا نام و نام خانوادگی خود را وارد کنید',
            'name.string' => 'نام باید به صورت متن باشد.',
            'name.min' => 'نام باید حداقل ۴ کاراکتر باشد.',
            'name.max' => 'نام نمی‌تواند بیشتر از ۲۰ کاراکتر باشد.',

            'username.required' => 'لطفا نام کاربری خود را وارد کنید',
            'username.string' => 'نام کاربری باید به صورت متن باشد.',
            'username.min' => 'نام کاربری باید حداقل ۴ کاراکتر باشد.',
            'username.max' => 'نام کاربری نمی‌تواند بیشتر از ۱۵ کاراکتر باشد.',
            'username.unique' => 'این نام کاربری قبلا ثبت شده است.',

            'number.required' => 'لطفا شماره موبایل خود را وارد کنید',
            'number.digits' => 'شماره موبایل شما اشتباه است.',
            'number.unique' => 'این شماره موبایل قبلا ثبت شده است.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = User::create($validator->validated());

            if ($user) {
                Auth::login($user);

                return redirect()->intended(route('index'))->with('success', 'حساب کاربری با موفقیت ایجاد شد!');
            } else {
                return back()->with('error', 'متاسفانه اطلاعات ثبت نشد. لطفا مجددا تلاش کنید.');
            }
        } catch (Exception $e) {
            return back()->with('error', 'خطایی رخ داده است.لطفا مجددا تلاش کنید.');
        }
    }
}