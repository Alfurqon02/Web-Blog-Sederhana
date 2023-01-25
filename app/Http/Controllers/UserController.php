<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user){
        return view('users', [
            'title'=>"All Users",
            'users'=>User::all()
        ]);
    }

    public function index(User $user){
        return view('posts', [
            'title'=>"$user->name's Post",
            'posts' => $user->posts->load('user', 'category')
        ]);
    }

    public function profile(User $user){
        return view('about',[
            'title' => "$user->username",
            'user'=>$user
        ]);
    }


}
