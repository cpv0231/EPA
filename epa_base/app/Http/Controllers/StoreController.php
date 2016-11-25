<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\TrackProducts;
use App\Subcategory;
use Flashy;
use App\Category;
use App\Website;
use App\User;
use App\ProductReview;
use App\Product;
use App\Brand;
use App\Image;
use App\Cart;
use Validator;
use Redirect;
use Auth;
use DB;

class StoreController extends Controller
{

  public function index()
  {

    $category = Category::all();
    $cart =0;
    if(Auth::check()){
     $user = Auth::user()->id;
     $cart = Cart::where('user_id' , $user)->count();
   }
   $processor = Product::where('subcategory_id' , 3)->take(4)->get();
   $fan = Product::where('subcategory_id' , 2)->take(4)->get();
   $case = Product::where('subcategory_id' , 1)->take(4)->get();
 
   return view('store/index')
   ->with('case',$case)
   ->with('fan',$fan)
   ->witH('processor',$processor)
   ->with('category', $category)
   ->with('products', Product::all())
   ->with('cart',$cart)
   ->with('brands', Brand::all());
 }

 public function viewproduct($id){
  $cart =0;
  $products = Product::find($id);
  $productimg = Product::all();
  $product_id = $id;
  $subcategory =Input::get('subcategory_id');

  $related_products = Product::where('subcategory_id', $products->subcategory_id)->inRandomOrder(4)->take(4)->get();   
  

  $review = ProductReview::where('product_id',$id)->get();
  if(Auth::check()){
   $user_id = Auth::user()->id;  
   $cart = Cart::where('user_id' , $user_id)->count();
   $count = TrackProducts::where('product_id', $product_id)->where('user_id' , $user_id)->count();
   if($count){
    $update =  DB::table('track_products')->where('user_id', $user_id)->where('product_id', $product_id)
    ->update(array(
      'countview' => DB::raw('countview + 1 ')
      ));
    $user = User::all();

    return view('store.product-review')
    ->with('related_products',$related_products)
    ->with('review',$review)
    ->witH('user',$user)
    ->with('productimg',$productimg)
    ->with('products',$products)
    ->with('cart',$cart)
    ->with('category', Category::all())
    ->with('brands', Brand::all());

  }
  TrackProducts::create([
    'user_id' => $user_id,
    'product_id' => $product_id,
    'countview' => '1'
    ]); 
}else{
 $user = User::all();
 $count = TrackProducts::where('product_id', $product_id)->where('user_id' , '0')->count();
 if($count){
  $update =  DB::table('track_products')->where('user_id', '0')->where('product_id', $product_id)
  ->update(array(
    'countview' => DB::raw('countview + 1 ')
    ));
  $review = ProductReview::where('product_id',$id)->get();
  return view('store.product-review')
   ->with('related_products',$related_products)
  ->with('review',$review)
  ->witH('user',$user)
  ->with('productimg',$productimg)
  ->with('products',$products)
  ->with('cart',$cart)
  ->with('category', Category::all())
  ->with('brands', Brand::all());
}
TrackProducts::create([
  'user_id' => '0',
  'product_id' => $product_id,
  'countview' => '1'

  ]); 
}
return view('store.product-review')
->with('related_products',$related_products)
->with('productimg',$productimg)
->with('review',$review)
->with('products',$products)
->with('cart',$cart)
->with('category', Category::all())
->with('brands', Brand::all());
}
public function addtocart(){
  $user_id = Auth::user()->id;
  $product_id = Input::get('product');
  $quantity = Input::get('qty');
  $price = Input::get('price');
  $product = Product::find($product_id);
  $total_price = $quantity * $price;
  $count = Cart::where('product_id', $product_id)->where('user_id' , $user_id)->count();
  if($count){
    if($quantity>1){
      $total_price = $quantity * $price;
      $update =  DB::table('carts')->where('product_id', $product_id)
      ->update(array(
        'quantity' => DB::raw($quantity),
        'total_price' => DB::raw('quantity * price')
        ));
      return Redirect::to('store-viewcart')->with('message' , 'The product added on your cart');
    }else{
     $total_price = $quantity * $price;
     $update =  DB::table('carts')->where('product_id', $product_id)
     ->update(array(
      'quantity' => DB::raw('quantity +1'),
      'total_price' => DB::raw('quantity * price')
      ));
     return Redirect::to('store-viewcart')->with('message' , 'The product added on your cart');
   }

 }else{
  if($quantity==0){
    $price = Input::get('price');
    $quantity = 1;
    $total_price = $quantity * $price;
    Cart::create([
      'user_id' => $user_id,
      'product_id' => $product_id,
      'quantity' => 1,
      'price' => $price,
      'total_price' => $total_price
      ]);

  }else{  
   $total_price = $quantity * $price;
   Cart::create([
    'user_id' => $user_id,
    'product_id' => $product_id,
    'quantity' => $quantity,
    'price' => $price,
    'total_price' => $total_price
    ]);
 }
}

return Redirect::to('store/viewcart');
}

public function getSubcategory($id){
 if(Auth::check()){
   $cart = Cart::where('user_id' , Auth::user()->id)->count(); 
 }
 else{
  $cart = 0;
}

$product= Product::where('subcategory_id', '=', $id)->take(12)->get();


return view('store.subcategory')
->with('products', $product)
->with('category' , Category::all())
->with('cart',$cart)
->with('subcategories', Subcategory::find($id))->with('brands', Brand::all());	
}

public function getSearch(){
  $keyword = Input::get('keyword');
  $cart =0;
  if(Auth::check()){
   $user = Auth::user()->id;  
   $cart = Cart::where('user_id' , $user)->count();

 }

 $products = DB::table('products')
 ->where('title', 'LIKE', '%'.$keyword.'%')
 ->orWhere('brand_id', 'LIKE', '%'.$keyword.'%')->get();


 return View('store.search')
 ->with('products', $products)
 ->with('cart',$cart)
 ->with('category' , Category::all())
 ->with('keyword', $keyword)->with('brands', Brand::all());


}

}

