<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $table='events';

    // public $timestamps=false;

    protected $fillable = array('title', 'image', 'content', 'type');
}
