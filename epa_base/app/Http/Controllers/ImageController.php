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

class ImageController extends Controller
{
	public function index($id) {
		$brands = Brand::all();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();
		$subcategories = Subcategory::all();
		$product= Product::with('images')->get();

		return View('manager.product.add-image')
		->with('products', Product::find($id))
		->with('subcategories', $subcategories)
		->with('brand', $brands)
		->with('cart',$cart)
		->with('category' , Category::all());
	}
	public function store(Request $request){
		$file  = $request->file('file');
		$number = $request->get('number');
		$number_img = $number+1;
		$filename = $request->input('product_name'). '-' . $number_img   . '.jpg';
		$file->move('img/products', $filename);
		$product = Product::find($request->input('product_id'));
	
		$image = $product->images()->create([
			'product_id' => $request->input('product_id'),
			'is_front' => 0,
			'file_path' => 'img/products/'.$filename,
			]);
		$url = url('products-image/'. Input::get('product_id'));

		return redirect($url)
		->with('products',Product::all())
		->with('message','Product image has been saved');
	}

	public function delete($product_id, $id){
		$delete = Image::where('id', $id)->delete();
		$url = url('products-image/' . $product_id);

		return redirect($url)
		->with('products',Product::all())
		->with('message','Product image deleted');
	}


}
