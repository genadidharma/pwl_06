<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::blogs();

        $header = $blog->where('slug', 'the-key-to-creative-work')->first();
        $side = $blog->filter(function($item){
            return $item->slug != 'the-key-to-creative-work';
        });
        return view('blog',['header' => $header,'side' => $side]);
    }

    public function show($slug){
        echo $slug;
    }
}
