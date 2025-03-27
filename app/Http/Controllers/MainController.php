<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function dashboard(){
        $posts = Post::orderBy("id","desc")->cursorPaginate(5);
        return view("dashboard")->with(["posts"=> $posts]);
    }
}
