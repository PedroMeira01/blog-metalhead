<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home');
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
