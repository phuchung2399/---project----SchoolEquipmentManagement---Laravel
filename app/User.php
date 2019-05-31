<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $guarded = ['ID','UserName','Class','Email','Password']; 
    public $timestamps = false;
}
