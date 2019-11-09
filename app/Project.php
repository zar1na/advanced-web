<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // MVC - model view controller *represent building blocks
    // artisan tinker-> run basic php or reference classes
    // collections are glorified arrays
    
    //$fillable 'title', 'description' -> safer as it doesn't allow for any unwanted data to pass through
    //$guarded -> accept eveything apart from, major mass assignment protection issues
    protected $fillable = [
    'title', 'description'
    ];
    
    public function tasks()
    {
    return $this->hasMany(Task::class);
    // relationship (project has many tasks)
    }
    
    public function addTask($description)
    {
        $this->tasks()->create(compact('description'));
        // alrady knows associated project it wil apply project id based on current instance
        /* return Task::create([
        'project_id' => $this->id,
        'description' => $description
        ]);
        */
        
    }
    
}

// $project->tasks
