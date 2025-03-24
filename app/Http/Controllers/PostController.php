<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("created_at","desc")->cursorPaginate(5);
        return view('posts.index')->with(['posts'=> $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        dd($request);

        $post = Post::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'user_id'=> auth()->user()->id,
            'photo'=> $request->photo ?? null,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        // $post = Post::find($id);
        $post = Post::find((int) $id);
        
        // dd($post);


        return view('posts.show')->with(['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
