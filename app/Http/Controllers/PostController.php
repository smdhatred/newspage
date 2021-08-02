<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    
    public function index()
    {
        $posts = DB::table('News')->get();
        return view('index', compact('posts'));

    }

    public function show($id)
    {
        $post = DB::table('News')->find($id);
        return view('posts.show', compact('post'));
    }

}
