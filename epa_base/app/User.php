<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'firstname', 'lastname', 'email', 'password' , 'user_type_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public static $rules = array(
        'firstname'=>'required|min:2|alpha',
        'lastname'=>'required|min:2|alpha',
        'email'=>'required|email|unique:users',
        'password'=>'required|alpha_num|between:8,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:8,12',
    );

    public function productReview(){
        return $this->hasMany('App\ProductReview');
    }

}
