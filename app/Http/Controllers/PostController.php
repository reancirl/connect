<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::get();
        return view('posts.index',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $data = $post;
        return view('posts.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addPost = new Post;
        $addPost->name = $request->name;
        $addPost->title = $request->title;
        $addPost->content = $request->content;
        $addPost->excerpt = $request->excerpt;
        $addPost->status = $request->status;
        $addPost->is_featured = $request->is_featured;
        $addPost->created_by = Auth::user()->id;
         if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/post', $picture);
            $addPost->image = $url;  
        }
        $addPost->save();

        return redirect('/post')->with("Post Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = $post;
        return view('posts.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->status = $request->status;
        $post->is_featured = $request->is_featured;
        $post->update();

        return redirect('/post')->with('success', 'Post Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/post')->with('success', 'Successfuly Deleted');
    }
}
