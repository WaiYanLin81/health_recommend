<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 protected $fillable= [
    	'name', 'photo','category_id'
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

     public function diseases()
    {
    	return $this->belongsToMany('App\Disease');
    }
}
