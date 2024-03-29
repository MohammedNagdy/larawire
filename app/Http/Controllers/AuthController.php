<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public static function authenticate(Request $request)
    {
        if (Auth::attempt([
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ], $request->get('remember'))) {
            return redirect()
                ->intended('/tasks')
                ->with('flash_notification.message', 'Logged in successfully')
                ->with('flash_notification.level', 'success');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('flash_notification.message', 'Wrong email or password')
            ->with('flash_notification.level', 'danger');
    }

    public static function logout(Request $request)
    {
        Auth::logout();

        return redirect('/')
            ->with('flash_notification.message', 'Logged out successfully')
            ->with('flash_notification.level', 'success');
    }
}
