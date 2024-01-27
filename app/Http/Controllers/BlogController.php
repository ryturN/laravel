<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController
{
    public function index(){
        return view('blog',[
            'title' => 'Blog',
            'blog' => Blog::all()
        ]);
    }
    public function show(Blog $post){
        return view('blogs',[
            'title' => 'Single Post',
            'new_post' => $post
        ]);
    }
}
