<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\TrackProducts;
use App\Subcategory;
use App\Category;
use App\Product;
use App\Brand;
use App\Cart;
use Validator;
use Redirect;
use Auth;
use DB;

class CategoryController extends Controller
{
	public function __construct(){
		$this->middleware(['auth','UserTypeCheck:2,3', 'isWebsiteEnabled']);
	}
	public function index(){
		$cart = Cart::where('user_id' , Auth::user()->id)->count();

		return view('manager/category/index')
		->with('category' ,Category::paginate(5))
		->with('subcategories',Subcategory::paginate(5))
		->with('cart',$cart)
		->with('brand' ,Brand::paginate(5));
	}
	public function store(Request $request){
		$validator = Validator::make($request->all(), Category::$rules);
		if($validator->passes()) {
			$categories = new Category();
			$categories->category_name = Input::get('category_name');
			$categories->save();
			$insert_id = $categories->id;
			if($request->file('category_image')){	//move file
				$img = $request->file('category_image');
				$img->move('images/category/',  $insert_id .'.jpg');
				$categories->category_image = $insert_id . '.jpg';
				$categories->save();  
			} 
			return redirect('categories')
			->with('message', 'Category Created');
		}	
		return redirect('categories')
		->withErrors($validator)
		->withInput();
	}
	public function edit($id){
		$rows = DB::table('categories')->where('id',$id)->first();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();

		return view('manager.category.edit')
		->with('row',$rows)
		->with('cart',$cart)
		->with('category' ,Category::paginate(5));
	}
	public function update(Request $request){
		$validator = Validator::make($request->all(), Category::$rulesUpdate);
		if ($validator->passes()) {
			if($request->file('category_image')){ //move file
				$img = $request->file('category_image');
				$img->move('images/category/',  Input::get('id') .'.jpg');
			}
			$data = array(
				'category_name' => Input::get('category_name'),
				'category_image' => Input::get('id') .'.jpg',
				);
			$id = Input::get('id');
			$i = DB::table('categories')->where('id',$id)->update($data);
			if($i > 0){
				return redirect('categories')
				->with('message' ,'Category updated');
			}
		}
		$editUrl = url('categories-edit/' . Input::get('id') ) ;
		return redirect($editUrl)
		->withErrors($validator)
		->withInput();
	}
	public function delete($id){
		$delete = DB::table('categories')->where('id',$id)->delete();
		if($delete){
			return redirect('categories');
		}

	}

}
