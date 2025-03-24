<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index(){
        $posts = Post::orderBy("created_at","desc")->paginate(10);

        return response()->json($posts);
    }

    public function store(Request $request){
        $post = Post::create($request->all());

        return response()->json($post);
    }


    public function show($id){
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json($post);
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return response()->json($post);
    }
}
