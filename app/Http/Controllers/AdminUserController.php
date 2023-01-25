<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AdminUserController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view ('dashboard.users.index', [
            'users' => User::all()
        ]);
    }

    public function post(User $user)
    {
        $this->authorize('admin');
        return view('dashboard.users.posts', [
            'posts' => $user->post->load('user', 'category'),
            'user' => $user
        ]);
    }

    public function userProfile(User $user)
    {
        //$this->authorize('admin');
        return view('dashboard.users.profile', [
            'user'=>$user
        ]);
    }

}
