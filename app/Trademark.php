<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    protected $table = 'trademark';
    protected $guarded = ['id','name'];
    // public $timestamps=true;
    // public function products() {
    // 	return $this->belongsTo('App\Categories','categories_id','id');
    // }
}
