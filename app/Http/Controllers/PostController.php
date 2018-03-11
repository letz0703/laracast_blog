<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }    //

    public function show()
    {
    	return view('posts.show');
    }    //

    public function create()
    {
    	return view('posts.create');
    }
    public function store(Request $request)
    {
    	// dd(request()->all());

    	$post = new Post;


    	$post['title'] = $request->title;
    	$post['body'] = $request->body;

    	$post->save();

    	return redirect('/');
    }

}
