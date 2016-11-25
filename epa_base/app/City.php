<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	 protected $fillable = ['id', 'province_id','city_name'];
    public function Address(){
		return $this->belongsTo('App\Address');
	}
	
	public function Brgy() {
		return $this->hasMany('App\Brgy');
	}	
}
