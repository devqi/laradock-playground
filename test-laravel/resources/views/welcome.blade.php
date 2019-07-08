@extends('layout')

@section('title', 'Home Page')
    
@section('content')
    <h1>Welcome to Laravel playground!</h1>

    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
@endsection
