<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Categories' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = "Post By Author : $author->name";
            // $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Post",
            "active" => 'post',
            // "posts" => Post::all()
            // menampilkan postingan dari terbaru
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(3)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            "title" => 'Single Post',
            "active" => 'post',
            "post" => $post
        ]);
    }
}