<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function show($id) {

        $posts = Post::all();

        return view('post');
    }

    public function create() {
        return view('create');
    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }
}
