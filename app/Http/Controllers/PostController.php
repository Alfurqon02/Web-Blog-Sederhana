<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

class PostController extends Controller
{
    
    public function show(Category $category){

        $title = "All Post";
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = "Post Category: $category->name";
        }
        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = "$user->name's Posts";
        }

        return view('posts', [
            'title' => $title,
            'category' => $category,
            'posts' => Post::with('category', 'user')->latest()->filter(request(['category', 'search', 'user']))->paginate(5)
        ]);
    }

    public function index(Post $post){
        return view('post', [
            'title' => $post->title,
            'post' => $post
        ]);

    }

    // public function show(Post $post){
    //     return view ('post',[
    //         "title" => "Baca Artikel",
    //         "post" => $post
    //     ]);
    // }

}
