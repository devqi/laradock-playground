<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new \App\Project;
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }

    public function show()
    {

    }

    public function update($id)
    {
        $project = \App\Project::findOrFail($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }

    public function edit($id)
    {
        $project = \App\Project::findOrFail($id);
        
        return view('projects.edit', compact('project'));
    }

    public function destroy($id)
    {
        \App\Project::findOrFail($id)->delete();

        return redirect('/projects');
    }
}
