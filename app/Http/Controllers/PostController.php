<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        // $this->authorizeResource(Post::class, 'post');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(15);
        $posts = Post::orderBy('id', 'desc')->paginate(15);
        return view('admin.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')
                                ->with('categories')
                                ->get();
        return view('admin.post.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->user()->cannot('create', Post::class)) {
        //     abort(403);
        // }

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:55',
            'description' => 'nullable|max:150',
            'category_id' => 'required',
            'content' => 'required',
            'thumbnail' => 'image|nullable|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('posts.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('thumbnail')) {
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->extension();
            $fileNameToStore = $fileName . '-' . time() . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs(
                'public/thumbnails', $fileNameToStore
            );
        }

        $post = new Post;
        $post->user_id = Auth::id();
        $post->category_id = $request->input('category_id');
        $post->title = $request->input('title');
        $post->slug = Str::of($request->input('title'))->slug('-');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        if ($request->hasFile('thumbnail')) {
            $post->thumbnail = $fileNameToStore;
        }
        $post->status = $request->input('status');
        $post->save();

        return redirect()->route('posts.create')->with('success', 'New record created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $post->increment('views');
        // Người dùng hiện tại
        $user = Auth::user();
        
        if ($user->can('view', $post)) {
            echo "Người dùng được quyền xem";
        } else {
            echo 'Người dùng không được quyền xem.';
        }
        return view('admin.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::whereNull('parent_id')
                                ->with('categories')
                                ->get();
        // if (Auth::id() !== $post->user_id) {
        //     return redirect()->route('posts.index')->with('error', 'Unauthorized page.');
        // }
        if (Gate::allows('update-post', $post)) {
            return view('admin.post.edit', ['post' => $post, 'categories' => $categories]);
        } else {
            return redirect()->route('posts.index')->with('error', 'Unauthorized page.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:55',
            'description' => 'nullable|max:150',
            'category_id' => 'required',
            'content' => 'required',
            'thumbnail' => 'image|nullable|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('posts.edit', $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('thumbnail')) {
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->extension();
            $fileNameToStore = $fileName . '-' . time() . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs(
                'public/thumbnails', $fileNameToStore
            );
        }

        $post = Post::findOrFail($id);
        $post->user_id = Auth::id();
        $post->category_id = $request->input('category_id');
        $post->title = $request->input('title');
        $post->slug = Str::of($request->input('title'))->slug('-');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        if ($request->hasFile('thumbnail')) {
            $post->thumbnail = $fileNameToStore;
        }
        $post->status = $request->input('status');

        if ($request->user()->cannot('update', $post)) {
            abort(403);
        }

        $post->save();

        return redirect()->route('posts.edit', $id)->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if (Auth::id() !== $post->user_id) {
            return redirect()->route('posts.index')->with('error', 'Unauthorized page.');
        }
        if ($post->thumbnail !== 'noimage.jpg') {
            Storage::delete('public/thumbnails/' . $post->thumbnail);
        }
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Record deleted successfully.');
    }
}
