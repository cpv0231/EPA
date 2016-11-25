<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    	protected $fillable = array('product_id	' ,'is_front', 'file_path');

    	public function product(){
    		return $this -> belongsTo('App\Product');
    	}

    	public function cart(){
    		return $this -> belongsTo('App\Cart');
    	}


}
