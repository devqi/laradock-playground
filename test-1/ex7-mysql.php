<?php

require 'beautified-var_dump.php';
require 'Task.php';

try {
    $pdo = new PDO('mysql:host=mysql;port=3306;dbname=tododb','root','root');

} catch (PDOException $e) {
    die('Could not connect to mysql.');
    // echo $e;
}

$statement = $pdo->prepare('select * from todos;');

$statement->execute();

// beautifiedVarDump($statement->fetchAll());
// beautifiedVarDump($statement->fetchAll(PDO::FETCH_OBJ));



// fetch all results into the class 'Task'
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
beautifiedVarDump($tasks);

var_dump($tasks[0]->isCompleted());

echo '<br>';
echo '========================';
echo '<br>';

var_dump(parse_url('http://localhost:8000/name?name=qizhang'));

require 'index.view.php';