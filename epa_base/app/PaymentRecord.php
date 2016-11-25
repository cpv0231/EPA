<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    
      protected $fillable = ['payment_id','token','payer_id'];

      public function orders(){
      	return $this->hasMany('App\Order');
      }
}
