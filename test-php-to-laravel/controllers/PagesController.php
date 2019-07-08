<?php

class PagesController
{
    public function home()
    {
        // $tasks = App::get('database')->selectAll('todos');
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function aboutCulture()
    {
        $name = 'Laracasts';

        return view('about-culture');
    }

    public function contact()
    {
        return view('contact');
    }
}
