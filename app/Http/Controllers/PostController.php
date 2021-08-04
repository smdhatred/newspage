<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\News;

class PostController extends BaseController
{
    
    public function index()
    {
        $posts = News::all();
        return view('index', compact('posts'));

    }

    public function show(News $post)
    {

        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:2',
            'alias' => 'required',
            'previev' => 'required',
            'content' => 'required',
            'published_at'=>'required',
        ]);

        News::create(
            request(array('title', 'alias', 'previev', 'content','published_at'))
        );

        return redirect('/');
    }
    public function edit(News $post)
    {
        return view("posts.edit", compact('post'));
    }
    
    public function update(News $post)
    {

        $this->validate(request(), [
            'title' => 'required|min:2',
            'alias' => 'required',
            'previev' => 'required',
            'content' => 'required',
            'published_at'=>'required',
        ]);
        $post->update(request(['title', 'alias', 'previev', 'content','published_at']));
        return redirect('/');
    }
    public function destroy(News $post){
        $post->delete();
        return redirect('/');
    }



}
