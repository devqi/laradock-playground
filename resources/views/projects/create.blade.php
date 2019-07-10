@extends('projects.layout')
@section('title', 'Create Project')

@section('content')
<h1>Create a new project</h1>
<form action="/projects" method="post">
    {{ csrf_field() }}

   @include('projects.error')

    <div>
        <input type="text" name="title" placeholder="Project title ... " value="{{ old('title') }}" required>
    </div>
    <div>
        <textarea name="description" placeholder="Project description ..." equired>{{ old('description') }}</textarea>
    </div>
    <div>
        <button type="submit">Create project</button>
    </div>
</form>
@endsection
