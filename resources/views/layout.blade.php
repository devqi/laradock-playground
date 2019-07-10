<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">


            <div class="navigation">

                <ul class="links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li> <a href="/about">About</a></li>
                </ul>
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
