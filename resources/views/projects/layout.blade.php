<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ttps://cdnjs.com/libraries/bulma">
    <title>@yield('title')</title>
    <style>
        .is-completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <h3><a href="/projects">Go Home</a></h3>
    <h3><a href="/projects/create">Create Project</a></h3>
    @yield('content')
</body>
</html>