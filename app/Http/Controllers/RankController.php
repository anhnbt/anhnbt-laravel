<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Rank;

class RankController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranks = DB::table('ranks')->orderBy('id', 'desc')->paginate(10);
        return view('rank.index', ['ranks' => $ranks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required',
            'old_price' => 'required',
            'total_price' => 'required',
            'estimated_completion_time' => 'required',
            'total_estimated_completion_time' => 'required',
            'thumbnail' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('ranks.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('thumbnail')) {
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->extension();
            $fileNameToStore = $fileName . '-' . time() . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs(
                'public/thumbnails',
                $fileNameToStore
            );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $rank = new Rank;
        $rank->user_id = Auth::id();
        $rank->name = $request->input('name');
        $rank->price = $request->input('price');
        $rank->old_price = $request->input('old_price');
        $rank->total_price = $request->input('total_price');
        $rank->estimated_completion_time = $request->input('estimated_completion_time');
        $rank->total_estimated_completion_time = $request->input('total_estimated_completion_time');
        $rank->thumbnail = $fileNameToStore;
        $rank->save();

        return redirect()->route('ranks.create')->with('success', 'New record created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('rank.show', ['rank' => Rank::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('rank.edit', ['rank' => Rank::findOrFail($id)]);
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
            'name' => 'required|max:255',
            'price' => 'required',
            'old_price' => 'required',
            'total_price' => 'required',
            'estimated_completion_time' => 'required',
            'total_estimated_completion_time' => 'required',
            'thumbnail' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('ranks.edit', $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('thumbnail')) {
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->extension();
            $fileNameToStore = $fileName . '-' . time() . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs(
                'public/thumbnails',
                $fileNameToStore
            );
        }

        $rank = Rank::findOrFail($id);
        $rank->user_id = Auth::id();
        $rank->name = $request->input('name');
        $rank->price = $request->input('price');
        $rank->old_price = $request->input('old_price');
        $rank->total_price = $request->input('total_price');
        $rank->estimated_completion_time = $request->input('estimated_completion_time');
        $rank->total_estimated_completion_time = $request->input('total_estimated_completion_time');
        if ($request->hasFile('thumbnail')) {
            $rank->thumbnail = $fileNameToStore;
        }
        $rank->save();

        return redirect()->route('ranks.edit', $id)->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rank = Rank::findOrFail($id);
        if ($rank->thumbnail !== 'noimage.jpg') {
            Storage::delete('public/thumbnails/' . $rank->thumbnail);
        }
        $rank->delete();
        return redirect()->route('ranks.index')->with('success', 'Record deleted successfully.');
    }
}
