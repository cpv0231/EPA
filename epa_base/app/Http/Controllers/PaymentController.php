<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Paypal;
use Input;
use App\Cart;
use App\Address;
use App\Product;
use App\City;
use App\Brgy;
use Redirect;
use App\PaymentRecord;
use App\Order;
use App\Province;
use App\Category;
use Auth;
use App\User;
use DB;
class PaymentController extends Controller
{   
 private $_apiContext;
 public function __construct()
 {
    $this->middleware(['auth','UserTypeCheck:1']);
    $paypal = new \Netshell\Paypal\Paypal;
    $this->_apiContext = $paypal->ApiContext(
        config('services.paypal.client_id'),
        config('services.paypal.secret'));

    $this->_apiContext->setConfig([
        'mode' => 'sandbox',
        'service.EndPoint' => 'https://api.sandbox.paypal.com',
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('logs/paypal.log'),
        'log.LogLevel' => 'FINE'
        ]);
}

public function getCheckout()
{
    $user_id = Auth::user()->id;
    $cart_products = Cart::with('Products')->where('user_id', '=',$user_id)->get();
    $address = Input::get('address');
    $shipping = Address::where('id','=',$address)->get();
    $payer = PayPal::Payer();
    $payer->setPaymentMethod('paypal');
    $amount = PayPal:: Amount();
    $amount->setCurrency('PHP');
    $amount->setTotal(Input::get('total_price')); // This is the simple way,
    // you can alternatively describe everything in the order separately;
    // Reerence the PayPal PHP REST SDK for details.
    $i =0;
    $currency ='PHP';
    $items = array();
    foreach($cart_products as $unpaid)
    {
        $items[$i] = PayPal:: Item();
        $items[$i]->setName($unpaid->Products->title)
        ->setQuantity($unpaid->quantity)
        ->setPrice($unpaid->Products->price)
        ->setCurrency($currency); 
        $i++;
        
    }
    
    foreach ($shipping as $address) {
        $shipping_city = $address->City->city_name . ' , '. $address->Province->provDesc ;
        $shipping_address1= $address->complete_address;
        $shipping_number = $address->phone_number;
        $shipping_id = $address->id;
    }
    $shipping_country="PH";
    $shipping_state='PH';

    $shipping_address = PayPal::ShippingAddress();
    $shipping_address->setCity($shipping_city)
    ->setCountryCode($shipping_country)
    ->setLine1($shipping_address1)
    ->setState($shipping_state)
    ->setPhone($shipping_number);
    
    $itemList = PayPal::ItemList();
    $itemList->setShippingAddress($shipping_address)
    ->setItems($items);

    $transaction = PayPal::Transaction();
    $transaction->setItemList($itemList);
    $transaction->setamount($amount);
    $transaction->setDescription('Laptop');

    $redirectUrls = PayPal:: RedirectUrls();
    $redirectUrls->setReturnUrl(url('done?address='. $shipping_id));
    $redirectUrls->setCancelUrl(url('cancel?approved=false'));

    $payment = PayPal::Payment();
    $payment->setIntent('sale');
    $payment->setPayer($payer);
    $payment->setRedirectUrls($redirectUrls);
    $payment->setTransactions(array($transaction));

    $response = $payment->create($this->_apiContext);
    $redirectUrl = $response->links[1]->href;

    return Redirect( $redirectUrl );

}

public function getDone(Request $request)
{
    $id = $request->get('paymentId');
    $token = $request->get('token');
    $payer_id = $request->get('PayerID');
    $payment = PayPal::getById($id, $this->_apiContext);
    $paymentExecution = PayPal::PaymentExecution();

    $paymentExecution->setPayerId($payer_id);
    $executePayment = $payment->execute($paymentExecution, $this->_apiContext);
    
    $payment_record = PaymentRecord::create([
        'payment_id'=> $id ,
        'token'=> $token,
        'payer_id'=> $payer_id,
        ]);    

    $payment_id = $payment_record->id;
    
    $address = $request->get('address');
    $user_id = Auth::user()->id; 
    $cart_products = Cart::with('Products')->where('user_id', $user_id)->get();
    $cart_total =Cart::with('Products')->where('user_id',$user_id)->sum('total_price');


    $order = Order::create([
        'user_id' => $user_id,
        'address_id' => $address,
        'payment_record_id' => $payment_id,
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
        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase
}



public function checkout(){
    $province = Province::orderBy('province_name','ASC')->get();        
    $user_id = Auth::user()->id;
    $cart_products = Cart::with('Products')->where('user_id', '=',$user_id)->get();
    $cart = Cart::where('user_id' , $user_id)->count();
    $cart_total = Cart::with('Products')->where('user_id', '=',$user_id)->sum('total_price');      
    $address = Address::where('user_id',$user_id)->get();
    $addressCount = Address::where('user_id',$user_id)->count();
    $product = Product::with('images')->get();
    
    return view('checkout.index')
    ->with('product',$product)
    ->with('province',$province)
    ->with('address',$address)
    ->with('addressCount',$addressCount)
    ->with('products_cart', $cart_products)
    ->with('cart_total', $cart_total)
    ->with('cart',$cart)
    ->with('category' , Category::all());        
}




public function postAddress(){
    $address = new Address();
    $address->user_id = Auth::user()->id;
    $address->province_id = Input::get('province_id');
    $address->city_id = Input::get('city_id');
    $address->brgy_id = Input::get('brgy_id');
    $address->phone_number = Input::get('number');
    $address->complete_address=Input::get('address');
    $address->save();
    return redirect('checkout');
    
}

public function postSummary(){
    $user_id = Auth::user()->id;
    $address = Input::get('address');
    $cart_products = Cart::with('Products')->where('user_id', '=',$user_id)->get();
    $cart = Cart::where('user_id' , $user_id)->count();
    $cart_total = Cart::with('Products')->where('user_id', '=',$user_id)->sum('total_price');      
    $shippingAddress = Address::where('id' , '=', $address)->get();
    $category = Category::all();
    $product = Product::all();
    return view('checkout/checkout-summary')
    ->with('product',$product)
    ->with('category',$category)
    ->with('address',$shippingAddress)
    ->with('products_cart', $cart_products)
    ->with('cart_total', $cart_total)
    ->with('cart',$cart);
}

}
