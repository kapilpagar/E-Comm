<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // return $request->input();
        // return User::where(['email' => $request->email])->first();
        $user = User::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect('/login')->with('error', 'Email & Password is incorrect');
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/register')->with('success', 'Account created successfully...!');
    }
}
