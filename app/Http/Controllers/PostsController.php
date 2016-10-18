<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PostsRequest;
use App\Post;

class PostsController extends Controller
{

    public function __construct() {

        $this->middleware('auth', ['except' => [
            'index',
            'show'
        ]]);

    }


    public function index() {

    	$posts = Post::orderBy('created_at', 'desc')->paginate(5);
        
    	return view('posts.index', compact($posts, 'posts'));
    }

    public function create() {

    	return view('posts.create');
    }

    public function store(PostsRequest $request) {

        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        Session::flash('success', 'O post foi criado com sucesso');
    	return redirect()->route('posts.index');
    }

    public function edit($id) {

        $post = Post::findOrFail($id);

        return view('posts.edit', compact($post, 'post'));
    }

    public function update($id, PostsRequest $request) {

        $post = Post::findOrFail($id);
        $post->update($request->all());

        Session::flash('success', 'O post foi atualizado com sucesso');
        return redirect()->route('posts.index');
    }

    public function show($slug) {
    	$post = Post::where('slug_title', $slug)->first();

    	return view('posts.show', compact($post, 'post'));
    }

    public function destroy($id) {
        
        $post = Post::findOrFail($id);

        $post->delete();

        Session::flash('success', 'O post foi deletado com sucesso!');

        return redirect()->route('posts.index');
    }
}
