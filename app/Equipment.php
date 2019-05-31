<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';
    protected $guarded = ['id','trademark_id','user_id','cate_id','verificationcode','date_equip','status'];
    public $timestamps = false;
}
