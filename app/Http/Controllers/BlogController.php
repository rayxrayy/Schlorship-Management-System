<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        // $posts = Post::all();
        return view('blog');
    }

     public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show', ['post' => $post]);
    }

     public function create()
    {
        return view('blog.create');
    }

      // Store a new blog post
    public function store(Request $request)
    {
        // Validation and storing logic
    }

    // Edit an existing blog post (form view)
    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog.edit', ['post' => $post]);
    }

    // Update an existing blog post
    public function update(Request $request, $id)
    {
        // Validation and updating logic
    }

    // Delete a blog post
    public function destroy($id)
    {
        // Deletion logic
    }

}