<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    public $table='services';

   // public $timestamps=false;

    protected $fillable = array('date', 'topic', 'verse', 'speaker', 'leader');
}
