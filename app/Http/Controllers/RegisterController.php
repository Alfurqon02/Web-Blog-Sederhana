<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate(([
            'name' => 'required|max:255',
            'username' => 'required|string|min:3|max:32|unique:users,username',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'

        ]));

        $validatedData['password'] = bcrypt($validatedData['password']);
        //$validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect('/login')->with('success', 'Registration Successfully!');
    }
}
