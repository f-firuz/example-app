<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
            dump($post->likes);
            dump($post->title);
            dump($post->content);
//            echo ($post);

        foreach ($post->ori as &$value) {

            echo ($value);
        }

    }
}
