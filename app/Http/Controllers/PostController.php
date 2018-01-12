<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index',['posts'=>Post::orderBy('created_at', 'DESC')->simplePaginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate(['post' => 'required|max:300|min:1']);
        $newPost = new Post();
        $newPost->post = $request->input('post');
        $newPost->user_id = Auth::user()->id;
        $newPost->save();

        return redirect(action('PostController@index', ''));
    }

    /**
     * Display the specified resource.
     *
     * @param $singlePosts
     * @return \Illuminate\Http\Response
     */
    public function show($singlePosts)
    {
        return (view('replies.index',
            ['posts' => Post::where('id', $singlePosts)->with('comments.user')->get()]));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
