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
        \App\Project::create(request(['title', 'description' ]));

        return redirect('/projects');
    }

    public function show(\App\Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function update(\App\Project $project)
    {
        $project->update(request(['title', 'description' ]));

        return redirect('/projects');
    }

    public function edit(\App\Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function destroy(\App\Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
