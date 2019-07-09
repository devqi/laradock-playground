@extends('projects.layout')
@section('title', 'Create Project')

@section('content')
<h1>Create a new project</h1>
    <form action="/projects" method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title ... ">
        </div>
        <div>
            <textarea name="description" placeholder="Project description ..."></textarea>
        </div>
        <div>
            <button type="submit">Create project</button>
        </div>
    </form>
@endsection
