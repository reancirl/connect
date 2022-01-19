<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class MediaController extends Controller
{

    public function index(Request $request)
    {
        $media = Media::latest()->simplePaginate(25);
        return view('media.index',compact('request','media'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'alt_text' => 'required',
        ]);

        $media=new Media();
        $media->title=$request->title;
        $media->alt_text=$request->alt_text;
        if( $request->file('path') != null){
            $picture = $request->file('path');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/media', $picture);
            $media->path = $url;  
        }
        $media->save();
        return redirect()->back()->with('success','Successfully Created Media');
    }

    public function show(Media $media)
    {
        //
    }

    public function edit(Media $media)
    {
        //
    }

    public function update(Request $request, Media $media)
    {
        //
    }

    public function destroy($id)
    {
        $media = Media::find($id);
        $media->delete();
        return redirect()->back()->with('success','Media deleted successfully');
    }
}
