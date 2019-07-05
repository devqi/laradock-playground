<?php

require 'beautified-var_dump.php';

class Task {

    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isCompleted() 
    {
        return $this->completed;
    }

    public function getDescription() 
    {
        return $this->description;
    }
}

$task = new Task('Send mail to Phillip');
beautifiedVarDump($task->isCompleted());
$task->complete();
beautifiedVarDump($task->isCompleted());

$tasks = [
    new Task('Clean the bedroom'),
    new Task('Finish my powerpoint')
];
beautifiedVarDump($tasks);

require 'index.view.php';