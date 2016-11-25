<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	 protected $fillable = ['id', 'provDesc'];
   
     public function City() {
		return $this->hasMany('App\City');
	}	

	public function Address(){
		return $this->belongsTo('App\Address');
	}

	
}
