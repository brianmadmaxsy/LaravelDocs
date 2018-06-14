<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            echo "<li>".$post->title." - ".$post->content."</li>";
        }
    }
}
