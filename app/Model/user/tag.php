<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
	//many to many realation ship
    public function posts(){

    	return $this->belongsToMany('App\Model\user\post','post_tags')->poaginate(5); 
    }

    public function getRouteKeyName(){
    	
    	return 'slug'; 
    }
}
