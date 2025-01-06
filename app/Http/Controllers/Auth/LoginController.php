<?php

namespace App\Http\Controllers\Auth;


use App\Models\Merchant;
use App\Models\TypeMerchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        // Auth::guard('admin')->logout();
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => ['required'],
            'password' =>  ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('home'));
        } else {
            return redirect()->back()->withErrors(['error' => 'Incorrect username or password']);
        }
    }

    public function signup()
    {
        // // Auth::guard('admin')->logout();
        // $type_merchants = TypeMerchant::where('status',1)->get();
        // return view('Auth.signup',compact('type_merchants'));
    }

    public function logout()
    {
        Auth::logout();
        return  redirect()->route('login');
    }
}
