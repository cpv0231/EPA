<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\TrackProducts;
use App\Subcategory;
use App\Category;
use App\Website;
use App\ProductReview;
use App\Product;
use App\Brand;
use App\Image;
use App\Cart;
use Validator;
use Redirect;
use Auth;
use DB;

class ProductReviewController extends Controller
{	

	public function store(Request $request) {
		$validator = Validator::make($request->all(), ProductReview::$rules);
		
		if ($validator->passes()) {
			$product_review = new ProductReview;
			$product_review->user_id = Auth::user()->id;
			$product_review->product_id = Input::get('product_id');
			$product_review->rate = Input::get('rate');
			$product_review->review_title = Input::get('review_title');
			$product_review->review_description = Input::get('review_description');
			$product_review->save();
			$url = url('product-review/'. Input::get('product_id'));

			$review = ProductReview::all();
			return Redirect::to($url)
			->with('review',$review)
			->with('message', 'Product_review Created');
		}
		return Redirect::to($url)
		->withErrors($validator)
		->withInput();
	}

	public function addToCart(){
		if(Auth::check()){
			$user_id = Auth::user()->id;
			$product_id = Input::get('product');
			$quantity =  Input::get('quantity')!=null  ? Input::get('quantity'):1;
			$price = Input::get('price');
			$product = Product::find($product_id);
			$total = $quantity * $price;

			$count = Cart::where('product_id', $product_id)->where('user_id' , $user_id)->count();
			if($count){
				$quantity =  Input::get('quantity')!=null  ? Input::get('quantity'):1;
				$total = $quantity * $price;
				
				$update =  DB::table('carts')->where('product_id', $product_id)
				->update(array(
					'quantity' => DB::raw($quantity),
					'total_price' => DB::raw('quantity * price')
					));
				return Redirect::to('/')->with('message' , 'The product added on your cart');
			}
			Cart::create([
				'user_id' => $user_id,
				'product_id' => $product_id,
				'quantity' => $quantity,
				'price' => $price,
				'total_price' => $total
				]);
			return Redirect::to('store-viewcart');
		}else{
			return Redirect::to('users/signin');
		}
	}

    //protected $fillable = array('user_id','product_id', 'review_title', 'review_description');
}
