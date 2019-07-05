<?php

// var_dump($_POST);
// echo '<br>';

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

// after insertion of name, redirect to home page
header('Location: /');

