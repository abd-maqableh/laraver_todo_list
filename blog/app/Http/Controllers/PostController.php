<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        $users = 'user 1';
        $title = 'Posts list';

        $data = [
            'my_posts' => $posts,
//            'my_users' => $users,
            'page_title' => $title
        ];

//         return view('posts.posts', compact($posts));
        return view('posts.posts')->with($data);
    }

    public function create() {
        return view('posts.create');
    }

    public function save() {
        return 'form submitted';
    }
}
