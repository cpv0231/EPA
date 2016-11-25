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
use App\Cart;
use Validator;
use Redirect;
use Auth;
use DB;

class TrackproductController extends Controller
{

	public function TrackProducts(){
		$category = Category::all();
		$subcategory = Subcategory::all();
		$products = Product::all();
		$brands = Brand::all();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();

		$trackproduct =TrackProducts::with('Products')
		->select('product_id', DB::raw('SUM(countview) as countview'))
		->groupBy('product_id')  
		->orderBy('countview','desc')
		->get();


		return view('manager/trackproduct')
		->with('brands', $brands)
		->with('cart',$cart)
		->with('trackproduct', $trackproduct)
		->with('category' , Category::all());
	}
}
