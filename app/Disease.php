<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{

	 protected $fillable= [
    	'name'
    ];
    	public function products()
    	{
    	return $this->belongsToMany('App\Product','disease_product')->withPivot('description')->withTimestamps();
    	}
}