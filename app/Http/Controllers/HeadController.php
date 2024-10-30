<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HeadController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('layouts.head', compact('post'));
    }
   
}
