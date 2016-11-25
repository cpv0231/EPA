<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use App\Category;
use App\Product;
use App\Cart;
use App\Image;
use App\Brand;
use App\Subcategory;
use View;
use Auth;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
class CartController extends Controller
{

  public function __construct(){
    $this->middleware(['auth','UserTypeCheck:1,2,3', 'isWebsiteEnabled']);
  }

  public function viewCart(Request $request){
    $user_id = Auth::user()->id;
    $cart_products = Cart::with('Products')->where('user_id', '=',$user_id)->get();
    $cart_total = Cart::where('user_id', '=',$user_id)->sum('total_price');
    $cart = Cart::where('user_id' , Auth::user()->id)->count();
    $product = Product::with('images')->get();

    //$related_product_cart = 

    return view('store/viewcart')
    ->with('product',$product)
    ->with('products_cart', $cart_products)
    ->with('cart_total', $cart_total)
    ->with('cart',$cart)
    ->with('category' , Category::all());

  }


  public function addToCart(){
   $user_id = Auth::user()->id;
   $product_id = Input::get('product');
   $quantity = Input::get('quantity');
  $price = Input::get('price');
  $product = Product::find($product_id);
  $total_price = $quantity * $price;

  if(Auth::check()){
    $count = Cart::where('product_id', $product_id)->where('user_id' , $user_id)->count();
    if($count){
     $total = $quantity * $price;
     $update =  DB::table('carts')->where('product_id', $product_id)
     ->update(array(
      'quantity' => DB::raw('quantity + 1 '),
      'total_price' => DB::raw('quantity * price')
      ));
     return Redirect::to('store-viewcart')->with('message' , 'The product added on your cart');
   }else{

    
    Cart::create([
      'user_id' => $user_id,
      'product_id' => $product_id,
      'quantity' => $quantity,
      'price' => $price,
      'total_price' => $total_price

      ]);
    return Redirect::to('store-viewcart');  
  }

}

else{
  return Redirect::to('users/signin');
}

}


public function amountIncrement(){
  $user_id = Auth::user()->id;
  $product_id = Input::get('product');
  $quantity = Input::get('quantity');
  $price = Input::get('price');
  $product = Product::find($product_id);
  $total_price = $quantity * $price;
  $cart = Cart::where('user_id' , Auth::user()->id)->count();
  $count = Cart::where('product_id', $product_id)->where('user_id' , $user_id)->count();
  if($count){
   $total = $quantity * $price;
   $update =  DB::table('carts')->where('product_id', $product_id)
   ->update(array(
    'quantity' => DB::raw('quantity + 1 '),
    'total_price' => DB::raw('quantity * price')
    ));

   return Redirect('store-viewcart')
   ->with('cart',$cart)
   ->with('message' , 'The product added on your cart');

 }
 else{
  echo "delete";
}


}
public function amountDecrement(){
 $user_id = Auth::user()->id;
 $product_id = Input::get('product');
 $quantity = Input::get('quantity');
 $price = Input::get('price');
 $product = Product::find($product_id);
 $total = $quantity * $price;
 $cart = Cart::where('user_id' , Auth::user()->id)->count();
 $count = Cart::where('product_id', $product_id)->where('user_id' , $user_id)->count();

      if($count){ // existing product in the  cart
       $total = $quantity * $price;
       $update =  DB::table('carts')->  where('product_id', $product_id)
       ->update(array(
        'quantity' => DB::raw('quantity - 1 '),
        'total_price' => DB::raw('quantity * price')
        ));
       return Redirect('store-viewcart')
       ->with('message' , 'The product decrease on your cart');
     }
     else{
      echo "error";
    }
  }

  public function deleteCart($id){
    $delete = DB::table('carts')->where('id',$id)->delete();
    if($delete){
     return Redirect::to('/store-viewcart')
     ->with('message' , 'The product deleted from your cart');
   }

 }
}


