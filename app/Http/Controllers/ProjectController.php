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
    public function index()
    {
        $data = Project::leftjoin('neighborhoods', 'neighborhoods.id', 'projects.neighborhood_id')
            ->leftjoin('developers', 'developers.id', 'projects.developer_id')
            ->select('projects.*', 'neighborhoods.title as neighborhoodsTitle', 'developers.title as devTitle')
            ->get();

        $neighborhoods = Neighborhood::get();
        $developers = Developer::get();

        return view('projects.index',compact('data', 'neighborhoods', 'developers'));
    }

    public function create()
    {
        //
    }

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

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        $data = Project::leftjoin('neighborhoods', 'neighborhoods.id', 'projects.neighborhood_id')
            ->leftjoin('developers', 'developers.id', 'projects.developer_id')
            ->select('projects.*', 'neighborhoods.title as neighborhoodsTitle', 'developers.title as devTitle')
            ->where('projects.id', $project->id)
            ->first();
        
        $neighborhoods = Neighborhood::get();
        $developers = Developer::get();

        // return view('projects._edit',compact('data', 'neighborhoods', 'developers'));
        return view('projects.edit',compact('data', 'neighborhoods', 'developers'));
    }

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

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success','Successfully Deleted Project');    
    }

    public function import_view() 
    {
        $cols = ['Title'];
        return view('projects.import',compact('cols'));
    }

    public function import(Request $request)
    {
        if ($request->import) {
            foreach ($request->import as $i => $import) {
                $data = Project::where('title',$import['Title'])->first();
                if(!$data) {
                    $project = new Project();
                    $project->title = $import['Title'];
                    $project->save();
                }
            }
        }

        return redirect()->back()->with('success','Imported Successfully!');
    }
}
