<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $kategori){
        return view('category', [
            'title' => 'All Category',
            'categories' => Category::all()
        ]);
    }

    public function index(Category $category){
            return view('posts', [
                'title' => "Post in $category->name",
                'posts' => $category->post->load('user', 'category')
            ]);
        }
}
