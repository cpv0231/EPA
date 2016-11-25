<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\TrackProducts;
use App\Subcategory;
use App\Category;
use App\Website;
use App\Product;
use App\Brand;
use App\Image;
use Flashy;
use App\Cart;
use App\User;
use Validator;
use Hash;
use Redirect;
use Auth;
use DB;

class UserController extends Controller
{
	
    public function getSignin() {
    	$cart =0;
    	return view('users.signin')
		->with('cart',$cart)
		->with('category' , Category::all());
	}
	public function getNewaccount(){
		
		return view('users.newaccount')
		->with('category' ,Category::all());
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->user_type_id='1';
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			/*
			Mail::send('emails/mailers', array('user' => $user) ,function($message){
				$message->to(Input::get('email') , Input::get('name'))->subject('welcome to EPA solution');
			});
			*/

			return Redirect::to('users/signin')
				->with('message', 'Thank you for creating a new account. Please sign in.');
		}

		return Redirect::to('users/newaccount')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {

			if(Auth::user()->user_type_id ==3 ){
				return redirect('admin_panel');
			}

			return Redirect::to('/')->with('message', 'Thanks for signing in');
		}

		return Redirect::to('users/signin')->with('error', 'Your email/password combo was incorrect');
	}
	public function getSignout() {
		Auth::logout();
		Flashy::message('Welcome Aboard!', 'http://your-awesome-link.com');
		return Redirect::to('users/signin')->with('message', 'You have been signed out');
	}
	
}

