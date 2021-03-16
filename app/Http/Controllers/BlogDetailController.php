<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function index(){
        echo 'Blog';
    }

    public function show($slug){
        return view('blog_detail', ['side' => Blog::getProjectBySlug($slug)]);
    }
}
