<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The fillable properties are those allowed to be 
     * manipulated outside.
     * It is a kind of little protection.
     */
    protected $fillable = [
        'title',
        'description'
    ];
}
