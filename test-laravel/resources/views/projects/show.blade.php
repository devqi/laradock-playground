@extends('projects.layout')

@section('title', 'Show Project Details')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <a href="/projects/{{ $project->id }}/edit">Edit Project</a>
@endsection