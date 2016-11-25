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

class BrandController extends Controller
{
	public function __construct(){
		$this->middleware(['auth','UserTypeCheck:2,3', 'isWebsiteEnabled']);
	}
	public function index(){
		$cart = Cart::where('user_id' , Auth::user()->id)->count();

		return view('manager.brand.index')
		->with('category' ,Category::all())
		->with('subcategories',Subcategory::paginate(5))
		->with('cart',$cart)
		->with('brand' ,Brand::paginate(5));
	}
	public function store(Request $request){
		$brands = new Brand();
		$brands->brand_name = Input::get('brand_name');
		$brands->save();
		$insert_id = $brands->id;
		if($request->file('brand_image')){	//move file
			$img = $request->file('brand_image');
			$img->move('images/brand/',  $insert_id .'.jpg');
			$brands->brand_image = $insert_id . '.jpg';
			$brands->save();  
		}    
		return redirect('brands');
	}
	public function edit($id){
		$rows = DB::table('brands')->where('id',$id)->first();
		$cart = Cart::where('user_id' , Auth::user()->id)->count();

		return view('manager.brand.edit')
		->with('row',$rows)
		->with('cart',$cart)
		->with('brand',Brand::paginate(5))
		->with('category' ,Category::paginate(5));
	}
	public function update(Request $request){
		$validator = Validator::make($request->all(), Brand::$rules);
		if ($validator->passes()) {
			if($request->file('brand_image')){	//move file
				$img = $request->file('brand_image');
				$img->move('images/brand/',  Input::get('id') .'.jpg');
			}
			$data = array(
				'brand_name' => Input::get('brand_name'),
				'brand_image' => Input::get('id') .'.jpg',
				);
			$id = Input::get('id');
			$i = DB::table('brands')->where('id',$id)->update($data);
			if($i > 0){
				return redirect('brands')
				->with('message' ,'Brand updated');
			}
		}
		$editUrl = url('brands-edit/' . Input::get('id') );

		return redirect($editUrl)
		->withErrors($validator)
		->withInput();
	}
	public function delete($id){
		$delete = DB::table('brands')->where('id',$id)->delete();
		if($delete){
			return redirect('brands')
			->with('message','Brand deleted succesfully');
		}
	}

}
