<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Learning PHP',
                'slug' => 'php'
            ],
            [
                'id' => 2,
                'title' => 'Learning Laravel',
                'slug' => 'laravel'
            ]
        ];
        
        // return view('blog', ['posts' => $posts]);
        return view('blog', compact('posts'));
    }

    public function post($slug)
    {
        return view('post', ['post' => $slug]);
    }
}
