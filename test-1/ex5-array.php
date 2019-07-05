<?php

// associative array 
$person = [
    'age' => 33,
    'hair' => 'black',
    'career' => 'consultant'
];
// add a new item
$person['name'] = 'Jeff';
// remove the tiem of 'age'
unset($person['age']);

// simple array
$names = [
    'Jeff', 
    'Mary',
    'Eric'
];
// add a new item
$names[] = 'Markus';

$greeting = 'Hello, World';

require 'index.view.php';
