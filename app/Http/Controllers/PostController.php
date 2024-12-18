<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['comments' => function ($query) {
            $query->take(5); 
        }])->take(5)->get(); 

        return view('index', compact('posts'));
    }
}