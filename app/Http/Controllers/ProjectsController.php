<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $projects = \App\Project::all();
        $projects = \App\Project::where('owner_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        /**
         * server-side validation
         */
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3', 'max:255']
        ]);

        $attributes['owner_id'] = auth()->id();
        // dd($attributes);
        \App\Project::create($attributes);

        return redirect('/projects');
    }

    public function show(\App\Project $project)
    {
        /**
         * 1. variation to check if the logged-in user owns the project 
         * that the user wants to access.
         */
        // abort_if($project->owner_id !== auth()->id(), 403);

        // 2. variation
        // abort_unless($project->owner_id == auth()->id(), 403);

        // 3. variation using Policy
        //    $this->authorize('view', $project);

        // 4. variation using \Gate
        abort_unless(Gate::allows('view', $project), 403);
        
        return view('projects.show', compact('project'));
    }

    public function update(\App\Project $project)
    {
        $project->update(request(['title', 'description']));

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
