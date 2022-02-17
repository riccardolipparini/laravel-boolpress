<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
{
    public function getHome(){

        $posts = Post::all();

        return view('pages.home', compact('posts'));
    }
}
