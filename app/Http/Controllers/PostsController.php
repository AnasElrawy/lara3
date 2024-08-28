<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::paginate(3);
        // $posts = Posts::all();

        // dd($posts);

        
        return view('CRUD.AllPosts',compact('posts'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=request()->all();
        $image_path='';
        if(request()->hasfile("image")){
            // $image = request()->file("image");
            $image = request()->image;
            $image_path=$image->store("posts", 'posts_images');
            
            // dd($image_path);
        }
        
        // dd($image_path);     
        $data['image'] = $image_path;

        // dd($post->image);

        $student = Posts::create($data); # accept data as associative array
        return to_route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        // $posts=Posts::find($posts);
        dd($posts);
        // return view('CRUD.showPost',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        dd($posts);

        // return view('CRUD.update', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
