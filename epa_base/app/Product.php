<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	protected $fillable = array('category_id','subcategory_id', 'brand_id', 'title', 'description', 'price', 'stocks','meta_description','meta_keyword','meta_title');

	public function subcategory() {
		return $this->belongsTo('App\Subcategory');
	}


	public function category() {
		return $this->belongsTo('App\Category');
	}


	public function brand() {
		return $this->belongsTo('App\Brand');
	}

	public function images(){
		return $this->hasMany('App\Image');
	}

	public function product_review(){
		return $this->hasMany('App\ProductReview');
	}

	public static $rules = array(
		'category_id'=>'required',
		'subcategory_id'=>'required',
		'title'=>'required|min:2',
		'description'=>'required|min:5',
		'price'=>'required|numeric',
		'stocks'=>'integer'
		
		);

	public static $rulesUpdate = array(
		'title'=>'required|min:2',
		'description'=>'required|min:5',
		'price'=>'required|numeric',
		'stocks'=>'integer'
		);

	

	
}