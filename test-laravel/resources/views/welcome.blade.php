@extends('layout')

@section('title', 'Home Page')
    
@section('content')
@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
    <h1>Welcome to Laravel playground!</h1>

    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
@endsection
