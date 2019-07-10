@extends('projects.layout')

@section('title', 'Show Project Details')

@section('content')
<h1>{{ $project->title }}</h1>
<p>{{ $project->description }}</p>
@if ($project->tasks()->count())
<ul>
    @foreach ($project->tasks as $task)
    <div>
        <form action="/tasks/{{ $task->id }}" method="post">
            @method('PATCH')
            @csrf
            <label for="completed" class="{{ $task->completed ? 'is-completed' : '' }} ">
                <input type="checkbox" name="completed" onchange="this.form.submit()"
                    {{ $task->completed ? 'checked' : ''}}>
                {{ $task->description }}
            </label>
        </form>
    </div>

    @endforeach
</ul>
@endif
<a href="/projects/{{ $project->id }}/edit">Edit Project</a>
{{-- add a new form to create tasks --}}
<div>
    <form action="/projects/{{ $project->id}}/tasks" method="post">
        @csrf
        <input type="text" name="description" required>
        <button type="submit">Add Task</button>
    </form>
    @include('projects.error')
</div>
@endsection
