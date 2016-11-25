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

class SubcategoryController extends Controller
{
	

	public function __construct(){
		$this->middleware(['auth','UserTypeCheck:2,3', 'isWebsiteEnabled']);
	}
	public function index(){
		$cart = Cart::where('user_id' , Auth::user()->id)->count();
		$subcategory = Subcategory::all();
		return view('manager/subcategory/index')
		->with('category' ,Category::paginate(5))
		->with('subcategories',$subcategory)
		->with('cart',$cart)
		->with('brand' ,Brand::paginate(5));

	}
	    //store subcategory
	public function store(Request $request){
		$validator = Validator::make($request->all(), Subcategory::$rules);
		if ($validator->passes()) {
			$subcategories = new Subcategory();
			$subcategories->subcategory_name = Input::get('subcategory_name');
			$subcategories->category_id= Input::get('category_id');
			$subcategories->save();

			return redirect('subcategories')
			->with('message', 'Subcategory Created');
		}	
		return redirect('subcategories')
		->withErrors($validator)
		->withInput();
	}
	public function edit($id){
		$rows = Subcategory::where('id',$id)->first();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();

		return view('manager.subcategory.edit')
		->with('row',$rows)
		->with('cart',$cart)
		->with('subcategories',Subcategory::paginate(5))
		->with('category' ,Category::all());
	}
	public function update(Request $request){
		$validator = Validator::make($request->all(), Subcategory::$rulesUpdate);
		if ($validator->passes()) {
			$data = array(
				'subcategory_name' => Input::get('subcategory_name'),
				'category_id' => Input::get('category_id'),
				);
			$id = Input::get('id');
			$i = Subcategory::where('id',$id)->update($data);
			if($i > 0){
				return redirect('subcategories')
				->with('message' ,'Subcategory updated');
			}
		}
		$editUrl = url('subcategories-edit/' . Input::get('id') ) ;
		return redirect($editUrl)
		->withErrors($validator)
		->withInput();

	}
	public function deleteSub($id){
		$delete = DB::table('subcategories')->where('id',$id)->delete();
		if($delete){
			return redirect('admin/category/subcategories');
		}

	}
}
