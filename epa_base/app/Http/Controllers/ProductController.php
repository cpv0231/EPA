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

class ProductController extends Controller
{
	public function __construct(){
		$this->middleware(['auth','UserTypeCheck:2,3', 'isWebsiteEnabled']);
	}
	public function index(){
		$category = Category::all();
		$subcategory = Subcategory::all();
		$products = Product::paginate(8);
		$brands = Brand::all();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();
		$review = ProductReview::all();
		

		return view('manager/product/index', compact('category'))
		->with('subcategories',$subcategory)
		->with('cart',$cart)
		->with('products',$products)
		->with('brand', $brands);
	}
//store products
	public function store(Request $request) {
		$validator = Validator::make($request->all(), Product::$rulesUpdate);
		$brand_id = Input::get('brand_id');
		if ($validator->passes()) {
			if(isset($brand_id)){
				$brand = Input::get('brand_id');
			}else{
				$brand = 0;
			}
			$product = new Product;
			$product->category_id = Input::get('category_id');
			$product->subcategory_id = Input::get('subcategory_id');
			$product->brand_id = $brand;
			$product->title = Input::get('title');
			$product->description = Input::get('description');
			$product->price = Input::get('price');
			$product->stocks = Input::get('stocks');
			$product->meta_description = Input::get('meta_description');
			$product->meta_title = Input::get('meta_title');
			$product->meta_keyword = Input::get('meta_keyword');
			
			$product->save();

			
			return Redirect::to('products')
			->with('message', 'Product Created');
		}
		return Redirect::to('products')
		->withErrors($validator)
		->withInput();
	}

  //edit products
	public function edit($id) {
		$brands = Brand::all();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();
		$subcategories = Subcategory::all();
		$subcategory_product = Subcategory::find($id);

		return View('manager.product.edit')
		->with('products', Product::all())
		->with('row', Product::find($id))
		->with('subcategories', $subcategories)
		->with('brand', $brands)
		->with('cart',$cart)
		->with('category' , Category::all());
	}
// update products
	public function update(Request $request) {
		$validator = Validator::make($request->all(), Product::$rulesUpdate);
		$category = Input::get('category_id');
		$brand = Input::get('brand_id');
		if(isset($category)){
			$category_id = Input::get('category_id');
		}else{
			$category_id = Input::get('old_category');
		}
		if(isset($brand)){
			$brand_id = Input::get('brand_id');
		}else{
			$brand_id = Input::get('old_brand');
		}
		if ($validator->passes()) {
			$data = array(
				'title' => Input::get('title'),
				'brand_id' => $brand_id,
				'subcategory_id' => Input::get('subcategory_id'),
				'category_id' => $category_id,
				'price' => Input::get('price'),
				'description' => Input::get('description'),
				'stocks' => Input::get('stocks')
				);
			$i = Product::where('id', Input::get('id'))->update($data);
			if($i > 0){
				return Redirect::to('products')
				->with('message', 'Product Updated');
			}

			
		}
		$editproduct= url('products-edit/'. Input::get('id'));
		return Redirect::to($editproduct)
		->withErrors($validator)
		->withInput();
	}
	public function delete($id){
		$delete = DB::table('products')->where('id',$id)->delete();
		if($delete){
			return redirect('products')->with('message','Product Deleted');
		}
	}

}
