<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{

    //show homepage

    public function index(){

        return view('guests.index');

    }

    public function about()
    {

        return view('guests.about');
    }

    public function contacts()
    {

        return view('guests.contacts');
    }


    public function posts(Post $post){

        $posts = Post::all();
        return view('guests.posts', compact('posts'));

    }
}
