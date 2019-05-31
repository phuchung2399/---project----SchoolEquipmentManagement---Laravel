<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Category';
    protected $guarded = ['id','name_category','quantity'];
    // public $timestamps=true;
    // public function products() {
    // 	return $this->belongsTo('App\Category','cate_id','id');
    // }
}
