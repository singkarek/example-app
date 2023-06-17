<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:100|unique:users',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:4|max:100'
        ]);

        User::create($validation);

        // $request->session()->flash('success', 'Register Successful, you can login now.');
        return redirect('/login')->with('success', 'Registration was successful! you can login now :)');
            
    }
}
