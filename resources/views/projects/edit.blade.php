@extends('projects.layout')
@section('title', 'Edit Project')

@section('content')
<h1>Edit Project</h1>
<form action="/projects/{{ $project->id }}" method="post">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="block">
        <input type="text" name="title" value="{{ $project->title }}">
    </div>

    <div class="block">
        <textarea name="description">{{ $project->description }}</textarea>
    </div>

    <div class="block">
        <button type="submit">Update Project</button>
    </div>
</form>

<form action="/projects/{{ $project->id }}" method="post">
    {{-- {{ method_field('DELETE') }} --}}
    {{-- {{ csrf_field() }} --}}
    @method('DELETE')
    @csrf

    <div class="block">
        <button type="submit">Delete Project</button>
    </div>
</form>
@endsection
