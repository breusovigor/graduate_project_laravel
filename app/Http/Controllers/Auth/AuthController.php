<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $array = $request->all();
        if (Auth::attempt([
            'email' => $array['email'],
            'password' => $array['password']
        ])) {
            return redirect()->intended('/');
        }


        return redirect()->back()
            ->withInput($request->only('login', 'remember'))
            ->withErrors([
                'login' => 'Доступ запрещен'
            ]);
    }
}
