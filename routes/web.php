<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Learning PHP'
        ],
        [
            'id' => 2,
            'title' => 'Learning Laravel'
        ]
    ];
    
    // return view('blog', ['posts' => $posts]);
    return view('blog', compact('posts'));
});

Route::get('blog/{slug}', function ($slug) {
    return view('post', ['post' => $slug]);
});

Route::get('search', function (Request $request) {
    return $request->all();
});