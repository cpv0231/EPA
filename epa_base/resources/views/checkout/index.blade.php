@extends('layout.app')
@section('content')



<div class="container">
  <div class="panel panel-default">
    <div class="row">
      <div class="col-xs-12 col-md-5">
        <form method="GET" action="{{ url('checkout-summary') }}">
            @foreach($address as $data)

            <div class="addressDesc">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Address</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>  <input type="radio" name="address" value="{{$data->id}}"></td>
                    <td> 
                      {{Auth::user()->firstname }} {{Auth::user()->lastname}}
                      <br>{{ $data->complete_address }}<br>
                      {{$data->Province->province_name }}<br>
                      {{$data->City->city_name}}<br>
                      {{$data->Brgy->brgy_name}}<br>
                      {{$data->phone_number}}
                    </td>
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>
            @endforeach
          @if($addressCount>0)
          <button class="btn btn-primary checkoutSummary btn-lg pull-right">Next</button>
          @endif
        </form>  
        <form action="{{ url('store-address') }}" method="POST" id="Shipping">
          <h3> Shipping address <i class="  glyphicon glyphicon-circle-arrow-right"></i></h3>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="control-label">Complete Address</label>
            <textarea required="required" name="address" class="form-control" placeholder="Ex. 30 Aguinaldo St. Gumaca Uezon" required></textarea>
          </div>

          <div class="form-group">
            <label class="control-label">Province</label>
            <select class="form-control input-sm" name="province_id" id="province">
              <option selected disabled>Choose here</option>

              @foreach($province  as $prov)  
              <option value="{{$prov->id}}">
                {{$prov->province_name}}
              </option>
              @endforeach   
            </select>

          </div> 

          <div class="form-group">
            <label class="control-label">City/Municipality</label>
            <select class="form-control input-sm" name="city_id" id="citymunicipality">
              <option value=""></option>
              <option selected disabled>Choose here</option>
            </select>
          </div>


          <div class="form-group">
           <label class="control-label">BRGY</label>
           <select class="form-control input-sm" name="brgy_id" id="brgy">
            <option value=""></option>
            <option selected disabled>Choose here</option>
          </select>
        </div>


        <div class="form-group">
          <label class="control-label">Phone number</label>
          <input type="text" class="form-control" name="number" placeholder="Ex. 09095252369"  required />
        </div>

        <button class="btn btn-primary submiAddress btn-lg pull-right">Submit</button>

      </div>
    </form>
    <br>
    <div class="row">
     <div class="col-md-6 col-xs-12" >
      <div class="panel panel-primary" id="ordersummary" >
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
  </div>
</div>



</div>

</div>


@stop

