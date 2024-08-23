<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Session;

class PostProccessor extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.dashboard", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048', // Make image optional
        ]);
    
        // Create a new Post instance
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('description');
        $post->author_id = auth()->id();
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            $filename = time() . '.' . $image->getClientOriginalExtension();
            
            $path = $image->storeAs('public/images', $filename);
            
            $post->image = $filename; 
        }
    
        $post->save();
    
        Session::flash('success', 'Post created successfully!');
        return redirect()->route('admin.home');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('admin.add_edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $post->delete();
        Session::flash('success','Post Deleted Successfully');
        return redirect()->route('admin.home');
    }
}
