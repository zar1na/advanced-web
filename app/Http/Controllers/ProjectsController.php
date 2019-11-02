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
        
        Project::create([
        'title' => request('title'),
        'description' => request('description'),
        ]);
        /* $project = new Project();
        
        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();
        */
        
        // redirect back to view all projects (get request by default)
        return redirect('/projects');
        
        //return request()->all();
    }
    
    
    public function show($id) // Project $project
    {
        $project = Project::findORfail($id);
        
        return view('projects.show', compact('project'));
    }
    
    
    public function edit($id) // responds to /projects/1/edit or whatever the user specifies
    {
        // return $id; shows what user specifies
        
        $project = Project::findORfail($id);
        
        return view('projects.edit', compact('project'));
    }
    
    
    public function update($id)
    {
       
        $project = Project::findORfail($id);
        
        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();
        
        return redirect('/projects');
    }
    
    
    public function destroy($id)
    {
        //Project::findORfail($id)->delete();
        dd('hello');
        //return redirect('/projects');
    }
    
}
