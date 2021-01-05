<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $posts = App\Models\Post::where('active', 1)
        $posts = Post::where('status', 'draft')
               ->orderBy('id', 'desc')
               ->take(10)
               ->get();
        return view('home')->with('posts', $posts);
    }
}
