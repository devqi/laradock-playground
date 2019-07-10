<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the city hall',
            'Go shopping',
            'Finish the report',
            'Cook the dinner'
        ];

        return view('welcome')->withTasks($tasks);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
