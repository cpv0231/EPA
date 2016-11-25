<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use App\Category;
use App\Product;
use App\Wishlist;
use App\Cart;
use App\Brand;
use App\Subcategory;
use View;
use Auth;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
class WishlistController extends Controller
{
  public function __construct(){
    $this->middleware(['auth','UserTypeCheck:1,2,3', 'isWebsiteEnabled']);
  }

  public function viewWishlist(){
    $user_id = Auth::user()->id;
    $wishlist_products = Wishlist::with('Products')->where('user_id', '=',$user_id)->get();
    $cart = Cart::where('user_id' , Auth::user()->id)->count();
    return view('store/viewwishlist')
    ->with('product',Product::all())
    ->with('wishlist_products', $wishlist_products)
    ->with('cart',$cart)
    ->with('category' , Category::all());
  }

  public function addToWishlist(){
    if(Auth::check()){
      $user_id = Auth::user()->id;
      $product_id = Input::get('product_id');
      $product = Product::find($product_id);
      $count = Wishlist::where('product_id', $product_id)->where('user_id' , $user_id)->count();
      if($count){
       return Redirect::to('store-wishlist')->with('message' , 'The product is already on your wishlist');
     }
     Wishlist::create([
      'user_id' => $user_id,
      'product_id' => $product_id,
      ]);
     return Redirect::to('store-wishlist');
   }else{
    return Redirect::to('users/signin');
  }

}

public function addToCart(){
  if(Auth::check()){
    $user_id = Auth::user()->id;
    $product_id = Input::get('product');
    $quantity = Input::get('quantity');
    $price = Input::get('price');
    $product = Product::find($product_id);
    $total = $quantity * $price;
    $count = Cart::where('product_id', $product_id)->where('user_id' , $user_id)->count();
    if($count){
     $total = $quantity * $price;
     $update =  DB::table('carts')->where('product_id', $product_id)
     ->update(array(
          'quantity' => DB::raw('quantity + 1 '),
          'total_price' => DB::raw('quantity * price')
          ));
     return Redirect::to('/')->with('message' , 'The product added on your cart');
   }
   Cart::create([
    'user_id' => $user_id,
    'product_id' => $product_id,
    'quantity' => 1,
    'price' => $price,
    'total_price' => 1*$price
    ]);
   return Redirect::to('store-viewcart');
 }else{
  return Redirect::to('users/signin');
}
}

public function deleteWishlist($id){
  $delete = DB::table('wishlists')->where('id',$id)->delete();
  if($delete){
    return Redirect::to('store-wishlist')->with('message' , 'The item deleted from your wishlist');
  }
}
}
