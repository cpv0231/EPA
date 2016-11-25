<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
	 //
	protected $fillable = array('user_id','product_id', 'rate' ,'review_title', 'review_description');

	public function Products(){
		return $this->belongsTo('App\Product', 'product_id');
	}

	public function User(){
		return $this->belongsTo('App\User', 'user_id');
	}
	public static $rules = array(
		'review_title'=>'required|min:2',
		'review_description'=>'required|min:5'
		);		
}
