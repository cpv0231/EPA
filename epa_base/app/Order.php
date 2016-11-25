<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
      protected $fillable = ['user_id','address_id', 'payment_record_id','total' , 'address_id' ,'total_order'];

      public function orderItems(){
      	return $this->belongsToMany('App\Product' , 'order_details')
      	->withPivot('quantity','price','total_price')
      	->withTimestamps();
      }
      public function payment_record(){
      	 return $this->belongsTo('App\PaymentRecord','payment_record_id');
      }
      public function Address(){
      	return $this->belongsTo('App\Address');
      }
  
}
