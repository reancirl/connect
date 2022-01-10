<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Neighborhood;
use App\Models\Developer;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::join('neighborhoods', 'neighborhoods.id', 'projects.neighborhood_id')
            ->join('developers', 'developers.id', 'projects.developer_id')
            ->select('projects.*', 'neighborhoods.title as neighborhoodsTitle', 'developers.title as devTitle')
            ->get();

        $neighborhoods = Neighborhood::get();
        $developers = Developer::get();

        return view('projects.index',compact('data', 'neighborhoods', 'developers'));
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
        $project = new Project;
        $project->created_by = Auth::user()->id;
        $project->neighborhood_id = $request->neighborhood_id;
        $project->developer_id = $request->developer_id;
        $project->address = $request->address;
        $project->sales_status = $request->sales_status;
        $project->title = $request->title;
        $project->excerpt = $request->excerpt;
        $project->status = $request->status;
        $project->name = $request->name;
        $project->is_featured = $request->is_featured;
        $project->content = $request->content;
        $project->save();

        return Redirect::to('/project')->with('success', 'Successfully Update Project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $data = Project::join('neighborhoods', 'neighborhoods.id', 'projects.neighborhood_id')
            ->join('developers', 'developers.id', 'projects.developer_id')
            ->select('projects.*', 'neighborhoods.title as neighborhoodsTitle', 'developers.title as devTitle')
            ->where('projects.id', $project->id)
            ->first();
        
        $neighborhoods = Neighborhood::get();
        $developers = Developer::get();

        return view('projects._edit',compact('data', 'neighborhoods', 'developers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->created_by = Auth::user()->id;
        $project->neighborhood_id = $request->neighborhood_id;
        $project->developer_id = $request->developer_id;
        $project->address = $request->address;
        $project->sales_status = $request->sales_status;
        $project->title = $request->title;
        $project->excerpt = $request->excerpt;
        $project->status = $request->status;
        $project->name = $request->name;
        $project->is_featured = $request->is_featured;
        $project->content = $request->content;
        $project->update();

        return Redirect::to('/project')->with('success', 'Successfully Update Project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success','Successfully Deleted Project');    
    }
}
