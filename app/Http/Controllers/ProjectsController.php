<?php

namespace App\Http\Controllers;

// pulling in the project class- imports it in
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        // \App\Project -> starts at the root
        $projects = Project::all();
        
        // return $projects; outputs json format of projects
        
        // ['projects' => $projects] could be used instead of compact
        return view('projects.index', compact('projects'));
    }
    
    
    public function create()
    // create action simply loads a view
    {
        return view('projects.create');
    }
    
    
    public function store()
    {
        $project = new Project();
        
        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();
        
        // redirect back to view all projects (get request by default)
        return redirect('/projects');
        
        //return request()->all();
    }
    
}
