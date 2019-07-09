<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The fillable properties are those allowed to be 
     * manipulated outside.
     * It is a kind of little protection.
     */
    protected $fillable = [
        'title',
        'description'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) 
    {
        // \App\Project::create([
        //     'description' => $task->description,
        //     'project_id' => $this->id
        // ]);
        $this->tasks()->create($task);
    }
}
