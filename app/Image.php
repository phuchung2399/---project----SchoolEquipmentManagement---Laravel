<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'slide';
    protected $guarded = ['ID','Image']; 
    public $timestamps=true;
}
