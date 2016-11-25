@extends('layout.app')
@section('content')



<div class="container">
  <div class="panel panel-default">
    <div class="row">
      <div class="col-xs-12 col-md-5">

        <div id="address">
          @foreach($address as $data)
          
          <div class="addressDesc">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Shipping to address</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 
                    {{Auth::user()->firstname }} {{Auth::user()->lastname}}
                    <br>{{ $data->complete_address }}<br>
                    {{$data->Province->province_name }}<br>
                    {{$data->City->city_name}}<br>
                    {{$data->Brgy->brgy_name}}<br>
                    {{$data->phone_number}}
                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <br>
          </div>
          @endforeach
        </div>
        
        
      </div>
    </form>
    <br>
    <div class="row">
     <div class="col-md-6 col-xs-12" >
      <div class="panel panel-primary" id="ordersummary">
        <div class="panel-heading"> 
          <h3 align="center">Order Summary items({{$cart}}) </h3>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products_cart as $cart_item)
            <?php 
               $imagepath = '';
               foreach ($product as $productdata) {
                  if($cart_item->Products->id == $productdata->id){
                      foreach ($productdata->images as $img) {
                        $imagepath= url($img->file_path);
                      }
                  }
               }
               ?> 
            <tr>
             <td>
               <img src="{{ $imagepath}} ">{{$cart_item->Products->title}}
               
             </td>

             <td>
               <h6>{{$cart_item->quantity}}x</h6>
               <br>
             </td>
             <td>
               <h6>{{$cart_item->price}}</h6>
             </td>
           </tr>
           
           @endforeach
           <tr>
            <td>Subtotal</td>
            <td></td>
            <td>₱{{ $cart_total }}</td>
          </tr>
          <tr>
            
            <td><h4>Total</h4></td>
            <td></td>
            <td>
              <div class="totalsummary">
                <h4>₱{{ $cart_total }}</h4></td>
              </div>
            </tr>
            
            
          </tbody>
        </table> 
        
      </div>
      
    </div>
    <form action="{{url('checkout-orders') }}" method="post"> 
      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
      <input type="hidden" name="total_price" value="{{$cart_total }}">
      @foreach($products_cart as $cart_item)
      <?php
      $cnt=1;
      ?>
      <input type="hidden" name="item[{{$cnt}}]" value=" {{$cart_item->title}} ">
      <input type="hidden" name="quantity[{{$cnt}}]" value=" {{$cart_item->price}} ">
      <?php
      $cnt++;
      ?>
      @endforeach
      @foreach($address as $data)
      <input type="hidden" name="address" value="{{$data->id}}">
      @endforeach
      <button class="btn btn-primary checkoutBtn">checkout order</button>
    </form>
  </div>
</div>
</div>

</div>


@stop

