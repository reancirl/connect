<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Developer::get();
        return view('developers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $addDev = new Developer;
        $addDev->name = $request->name;
        $addDev->title = $request->title;
        $addDev->content = $request->content;
        $addDev->excerpt = $request->excerpt;
        $addDev->status = $request->status;
        $addDev->is_featured = $request->featured;
        $addDev->created_by = Auth::user()->id;
        $addDev->save();

        return redirect()->back()->with("Developer Added Successfully");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        $data = Developer::where("developers.id", $developer->id)  
                ->first();
                
        return view('developers._viewDeveloper',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
        return view('developers._editDeveloper',compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $developer)
    {
        // dd($developer);
        // echo "<pre>";
        // print_r($developer);
        // echo "</pre>";

        // echo "FOR REQUEST";
        // echo "<pre>";
        // print_r($request->All());
        // echo "</pre>";
        $developer->name = $request->name;
        $developer->title = $request->title;
        $developer->content = $request->content;
        $developer->excerpt = $request->excerpt;
        $developer->status = $request->status;
        $developer->is_featured = $request->featured;
        $developer->update();

        return Redirect::to('/developer')->with('success', 'Developer Updated Successfully ');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        $developer->delete();

        return Redirect::to('/developer')->with('success', 'Successfuly Deleted');
    }
}
