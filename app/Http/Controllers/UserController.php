<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'update']]);
    }
    //

    public static function store(Request $request)
    {
        User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => bcrypt($request->get('password'))
        ]);

        return redirect('login')
            ->with('flash_notification.message', 'User registered successfully')
            ->with('flash_notification.level', 'success');
    }

    public static function update(User $user, Request $request)
    {
        self::validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'confirmed'
        ]);

        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        if($request->get('password') !== ''){
            $user->password = $request->get('password');
        }
        $user->save();

        return redirect('tasks')
            ->with('flash_notification.message', 'Profile updated successfully')
            ->with('flash_notification.level', 'success');

    }
}
