<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectsTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        
        $project->addTask(request('description'));
        /* Task::create([
        'project_id' => $project->id,
        'description' => request('description')
        ]);
        */
       
        return back();
    }
    
    public function update(Task $task)
    {
       // $task->complete(request()->has('completed')); // telling the task what to do not how to do it like the bottom comment
        // no underlining of the db, attributes or fields
        // just wants to know a task
        /*
        $task->update([
        
        'completed' => request()->has('completed')
        
        ]);*/
        
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();
        //
        return back();
    }
}
