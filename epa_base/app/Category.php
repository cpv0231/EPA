<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
	'category_name','category_image'];

	public function subcategories() {
		return $this->hasMany('App\Subcategory');
	}	 


	public function products() {
		return $this->hasMany('App\Product');
	}	 
	public static $rules = array(
		'category_name'=>'required|min:3',
		'category_image'=>'required|image|mimes:jpeg,jpg'
		);


	public static $rulesUpdate = array(
		'category_name'=>'required|min:3|alpha'
		);

	
}
