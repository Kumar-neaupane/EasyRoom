<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class EasyController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function hnavbar()
    {
        return view('hnavbar');
    }

    public function footer()
    {
        return view('footer');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registers',
            'number' => 'required|string|regex:/^[0-9]{10}$/',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->number = $request->number;
        $register->password = bcrypt($request->password);
        $register->save();

        return redirect('/')->with('success', 'Registration successful!');
    }
}