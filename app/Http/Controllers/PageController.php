<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Post;

class PageController extends Controller
{
    public function show($slug) {
        $post = Post::where('slug', $slug)->first();
        if (is_null($post)) {
            return abort(404);
        }
        $post->increment('views');
        return view('web.blogs.show', ['post' => $post]);
    }

    public function dashboard() {
        $user_id = Auth::id();
        $posts = DB::table('posts')
                ->where('user_id', $user_id)
                ->orderBy('id', 'desc')
                ->get();
        return view('admin.pages.dashboard', ['posts' => $posts]);
    }

    public function ktdb() {
        $title = "Kí tự đặc biệt";
        return view('web.pages.ktdb')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Developer', 'SEO', 'MMO']
        );
        return view('pages.services')->with($data);
    }
}
