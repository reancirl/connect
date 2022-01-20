<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class NeighborhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Neighborhood::get();
        return view('neighborhoods.index',compact('data'));
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
        $addNeighbor = new Neighborhood;
        $addNeighbor->name = $request->name;
        $addNeighbor->title = $request->title;
        $addNeighbor->content = $request->content;
        $addNeighbor->excerpt = $request->excerpt;
        $addNeighbor->status = $request->status;
        $addNeighbor->is_featured = $request->is_featured;
        $addNeighbor->created_by = Auth::user()->id;
        $addNeighbor->created_by = Auth::user()->id;
         if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/neighborhood', $picture);
            $addNeighbor->image = $url;  
        }
        $addNeighbor->save();
        return redirect()->back()->with("Neighborhood Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Neighborhood  $neighborhood
     * @return \Illuminate\Http\Response
     */
    public function show(Neighborhood $neighborhood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Neighborhood  $neighborhood
     * @return \Illuminate\Http\Response
     */
    public function edit(Neighborhood $neighborhood)
    {
        $data = $neighborhood;
        return view('neighborhoods._editNeighborhood',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Neighborhood  $neighborhood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Neighborhood $neighborhood)
    {
        $neighborhood->name = $request->name;
        $neighborhood->title = $request->title;
        $neighborhood->content = $request->content;
        $neighborhood->excerpt = $request->excerpt;
        $neighborhood->status = $request->status;
        $neighborhood->is_featured = $request->is_featured;
        $neighborhood->update();

        return Redirect::to('/neighborhood')->with('success', 'Neighborhood Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Neighborhood  $neighborhood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Neighborhood $neighborhood)
    {
        $neighborhood->delete();

        return Redirect::to('/neighborhood')->with('success', 'Successfuly Deleted');
    }
}
