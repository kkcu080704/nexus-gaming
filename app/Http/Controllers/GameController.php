<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
   public function index() {
    $posts = \App\Models\GamePost::latest()->get();
    return view('welcome', compact('posts'));
}
public function show($slug)
{
    $post = \App\Models\GamePost::where('slug', $slug)->firstOrFail();
    return view('show', compact('post'));
}
}
