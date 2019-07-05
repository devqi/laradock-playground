<?php

class Task {

    public $description;
    public $completed = false;

    public function isCompleted() 
    {
        return 'Is this task completed?';
    }

}