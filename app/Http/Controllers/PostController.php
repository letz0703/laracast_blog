<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->get();
        $posts = Post::orderBy('created_at','desc')->get();
    	return view('posts.index',compact('posts'));
    }    //

    public function show(Post $post)
    {
        // $post = Post::find($id);
    	return view('posts.show',compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }
    public function store(Request $request)
    {
    	// dd(request()->all());

    	// $post = new Post;
    	// $post['title'] = $request->input('title');
    	// $post['body'] = $request->input('body');

    	// $post->save();

    	// Post::create($request->all());
    	// Post::create([
    	// 	'title'=>$request->title,
    	// 	'body' =>$request->body
    	// ]);

        $this->validate($request,[
            'title'=>'required',
            'body' =>'required'
        ]);
        // Post::create($request->all());
        Post::create($request->only('title','body'));
        // not working Post::create($request(['title','body']));
    	return redirect('/');
    }

}
