@extends('projects.layout')
@section('title', 'All Project')

@section('content')
<h1>All Projects</h1>
@foreach ($projects as $project)
    <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
@endforeach
@endsection