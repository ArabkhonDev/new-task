<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("created_at", "desc")->simplePaginate(5);
        return view('posts.index')->with(['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {

        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'photo' => $path ?? null,
        ]);
        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find((int) $id);
        return view('posts.show')->with(['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::find((int) $id);
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(StorePostRequest $request,  $id)
    {
        $post = Post::find($id);

        if ($request->hasFile('photo')) {
            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'photo' => $request->photo ?? null,
        ]);

        return redirect()->route('posts.show')->with('pos', $post);
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post->photo) {
            Storage::delete($post->photo);
        }
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Successfully deleted post');
    }
}
