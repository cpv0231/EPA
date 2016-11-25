<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

	
	public function products(){
		return $this->hasMany('App\Product');
	}


	protected $fillable = [
	'brand_name','brand_image'];


	
	public static $rules = array(
		'brand_name'=>'required|min:3|alpha',
		'brand_image'=>'required|image|mimes:jpeg,jpg'
		);


	public static $rulesUpdate = array(
		'brand_name'=>'required|min:3|alpha'
		);

}
