<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input,Auth;
use App\Product;
use App\Cart;
use App\Category;
use App\Order;
use Redirect;
use App\Http\Requests;

class OrderController extends Controller
{
 public function __construct(){
  $this->middleware(['auth','UserTypeCheck:1,2', 'isWebsiteEnabled']);
}
public function getIndex(){
 $user_id = Auth::user()->id;
 $orders = Order::with('orderItems')->where('user_id',$user_id)->get();
 $cart = Cart::where('user_id' , Auth::user()->id)->count();

 return view('store/vieworders')
 ->with('cart',$cart)
 ->with('orders',$orders)
 ->with('category' , Category::all());
}

public function postOrder(Request $request){
 $address = $request->get('address');
 $user_id = Auth::user()->id; 
 $cart_products = Cart::with('Products')->where('user_id', $user_id)->get();
 $cart_total =Cart::with('Products')->where('user_id',$user_id)->sum('total_price');


 $order = Order::create([
  'user_id' => $user_id,
  'address_id' => $address,
  'payment_record_id' => '0',
  'total_order' => $cart_total
  ]);

 foreach ($cart_products as $cart_product) {
  $stocks = $cart_product->Products->stocks - $cart_product->quantity;
  Product::where('id', $cart_product->Products->id)->update([
    'stocks'=> $stocks
    ]);
  $order->orderItems()->attach($cart_product->product_id,[
    'quantity' => $cart_product->quantity,
    'price' => $cart_product->price,
    'total_price' => $cart_product->quantity * $cart_product->price
    ]);
}

Cart::where('user_id' ,$user_id)->delete();
return Redirect::to('store-viewcart')->with('message','Your order processed successfully');

}

}
