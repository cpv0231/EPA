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
use App\Address;
use App\City;
use App\Brgy;
use App\Province;
use App\Brand;
use App\Image;
use App\Cart;
use Validator;
use Redirect;
use Auth;
use DB;

class AjaxController extends Controller
{	

	public function ajaxCategory(Request $request){
		if($request->ajax()){
			$category_id = Input::get('category_id');
			$subcategories_id = DB::table('subcategories')
			->where('category_id', '=' , $category_id)->get(); 
			return Response()->json($subcategories_id);
		}
	}
	public function ajaxRequestCity(Request $request){
		if($request->ajax()){
			$province = Input::get('province_id');
			$CityMuncipality = City::where('province_id', '=' , $province)->get(); 
			return Response()->json($CityMuncipality);
		}

	}
	public function ajaxRequestBrgy(Request $request){
		if($request->ajax()){
			$citymunCode = Input::get('city_id');
			$Brgy = Brgy::where('city_id', '=' , $citymunCode)->get(); 
			return Response()->json($Brgy);
		}  
	}

	
	public function Ajaxsearch(Request $request){
		if($request->ajax()){

			$output='';
			$search = Product::where('title', 'LIKE', 
				'%' .$request->keyword. '%' )
			->where('subcategory_id','=',$request->subcategory)
			->take(12)->get();


			if($search->count()>0){
				foreach ( $search as $keysearch) {
					foreach ($keysearch->images as  $img) {	
						if($img->is_front==1){
							$img_front = $img->file_path;
						}
					}	
					$output .= '
					<div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
						<div class="thumbnail" id="productThumbnail">'.
							'<img src="'.url($img_front).'">
							<form action="'. url('store-cart').'" method="post">
								<input type="hidden" name="_token" value="'. csrf_token() .'">
								<input type="hidden" name="product" value="'.$keysearch->id .'">
								<input type="hidden" name="price" value="'.$keysearch->price.'">
								<input type="hidden" name="quantity" value="1">
								<button class="btn btn-primary pull-right" id="addtocart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button> 
							</form>
							<h4>'.$keysearch->title .'</h4>
							<p>₱'.$keysearch->price.'</p>
						</div>
					</div>
				</div>

				';

			}
			
			return Response($output);
		}else{
			$output = '<h2>No Results found<h2>';
			return Response($output);
		}  

	}

}

public function Ajaxprice(Request $request){
	if($request->ajax()){
		$output='';

		$products = Product::where('price', '>=' , $request->min_price)
		->where('price', '<=' ,  $request->max_price)
		->where('subcategory_id','=',$request->subcategory)
		->take(12)->get();

		if($products->count()>0){
			foreach ( $products as $keysearch) {
				foreach ($keysearch->images as  $img) {
					$output .= '
					<div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
						<div class="thumbnail" id="productThumbnail">
							<img src="'.url($img->file_path).'">
							<form action="'. url('store-cart').'" method="post">
								<input type="hidden" name="_token" value="'. csrf_token() .'">
								<input type="hidden" name="product" value="'.$keysearch->id .'">
								<input type="hidden" name="price" value="'.$keysearch->price.'">
								<input type="hidden" name="quantity" value="1">
								<button class="btn btn-primary pull-right" id="addtocart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button> 
							</form>
							<h4>'.$keysearch->title .'</h4>
							<p>₱'.$keysearch->price.'</p>
						</div>
					</div>
				</div>

				';


			}
		}

		return Response($output);
	}else{
		$output = '<h2>No Results found<h2>';
		return Response($output);
	}  

}

}

public function Ajaxbrands(Request $request){
	if($request->ajax()){
		$output='';
		
		$products = Product::where(function($query){
			$min_price = Input::has('min_price') ? Input::get('min_price'):null ;
			$max_price = Input::has('max_price') ? Input::get('max_price'):null ;
			$brands = Input::has('brands') ? Input::get('brands'):[];

			if(isset($brands)){
				if(isset($min_price) && isset($max_price)){
					foreach ($brands as  $brand) {
						$query->orWhere('price', '>=', $min_price)
						->where('price', '<=' , $max_price)
						->where('brand_id', '=' , $brand); 
					}  
				}else{
					if(isset($brands)){
						foreach ($brands as $brand) {
							$query->OrWhere('brand_id', '=' ,$brand);
						}
					} 
				}
			}           

		})->where('subcategory_id',$request->subcategory)->get();

		foreach ( $products as $keysearch) {

			foreach ($keysearch->images as  $img) {

				//$image = URL::to($img->fie_path);

				$output .= '
				<div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
					<div class="thumbnail" id="productThumbnail">
						<img src="'.url($img->file_path).'">
						<form action="'. url('store-cart').'" method="post">
							<input type="hidden" name="_token" value="'. csrf_token() .'">
							<input type="hidden" name="product" value="'.$keysearch->id .'">
							<input type="hidden" name="price" value="'.$keysearch->price.'">
							<input type="hidden" name="quantity" value="1">
							<button class="btn btn-primary pull-right" id="addtocart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button> 
						</form>
						<h4>'.$keysearch->title .'</h4>
						<p>₱'.$keysearch->price.'</p>
					</div>
				</div>
			</div>

			';


		}
	}


	return Response($output);
}

}

public function sortproducts(Request $request){		
	$sort = Input::get('sort');
	if($request->ajax()){
		$output='';
		$product = Product::where('subcategory_id','=',$request->subcategory)
		->orderBy('price',$request->priceSort)
		->take(12)->get();

		if($product->count()>0){
			foreach ( $product as $keysearch) {
				foreach ($keysearch->images as  $img) {
					$output .= '
					<div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
						<div class="thumbnail" id="productThumbnail">
							<img src="'.url($img->file_path).'">
							<form action="'. url('store-cart').'" method="post">
								<input type="hidden" name="_token" value="'. csrf_token() .'">
								<input type="hidden" name="product" value="'.$keysearch->id .'">
								<input type="hidden" name="price" value="'.$keysearch->price.'">
								<input type="hidden" name="quantity" value="1">
								<button class="btn btn-primary pull-right" id="addtocart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button> 
							</form>
							<h4>'.$keysearch->title .'</h4>
							<p>₱'.$keysearch->price.'</p>
						</div>
					</div>
				</div>

				';


			}
		}

		return Response($output);
	}else{
		$output = '<h2>No Results found<h2>';
		return Response($output);
	}  


}

}

}
