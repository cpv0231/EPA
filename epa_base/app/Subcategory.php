<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $fillable = ['category_id','subcategory_name'];

  public function category() {
		return $this->belongsTo('App\Category');
	}

  public function products(){
  	return $this->hasMany('App\Product');
  }


	public static $rules = array(
		'subcategory_name'=>'required|min:3',
		'category_id'=>'required'
	);

	public static $rulesUpdate = array(
		'subcategory_name'=>'required|min:3'
	);
}
