<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brgy extends Model
{
   
	 protected $fillable = ['id', 'city_id','brgyDesc'];
    public function Address(){
		return $this->belongsTo('App\Address');
	}
	
}
