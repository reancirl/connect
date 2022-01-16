<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use Auth;


class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PostCategory::get();
        return view('categories.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostCategory $postCategory)
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addCategory = new PostCategory;
        $addCategory->name = $request->name;
        $addCategory->slug = $request->slug;
        $addCategory->save();

        return redirect('/category')->with("Category Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PostCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  PostCategory::find($id);
        return view('categories.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postCategory = PostCategory::find($id);
        $postCategory->name = $request->name;
        $postCategory->slug = $request->slug;
        $postCategory->update();

        return redirect('/category')->with('success', 'Category Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postCategory = PostCategory::find($id);
        $postCategory->delete();
        return redirect('/category')->with('success', 'Successfuly Deleted');
    }
}
