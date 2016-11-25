<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
     protected $fillable = ['user_id','name', 'province_id','city_id', 'brgy_id','phone_number','complete_address'];
     
    public function Province(){
        return $this->belongsTo('App\Province');
    }

      public function City(){
        return $this->belongsTo('App\City');
    }

       public function Brgy(){
        return $this->belongsTo('App\Brgy');
    }
    public function Order(){
      return $this->belongsToMany('App\Order');
    }
    public $timestamps = false;

}
