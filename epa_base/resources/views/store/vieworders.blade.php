

@extends('layout.app')



@section('content')
  
  <br>
  <h2 > Orders </h2>

  @foreach($orders as $order)

<div class="container">
  <a href="#">Order # {{$order->id}} - {{Auth::user()->firstname}}
    -
    {{$order->created_at}}
  </a>
  <div class="table-responsive">
   <table class="table table-hover">
    <thead>
      <tr>
        <th class="order-title">Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>

      @foreach($order->orderItems as $order_item)

      <tr>
        <td > {{$order_item->title}} </td>
        <td>  {{$order_item->pivot->quantity}} </td>
        <td> {{$order_item->pivot->price}} </td>
        <td> {{$order_item->pivot->total_price}}</td>
      </tr>
      @endforeach


      <tr>
        <td></td>
        <td></td>
        <td><strong> Total</strong></td>
        <td><strong>{{$order->total_order}}</strong></td>
        <td></td>
      </tr>

    </tbody>
  </table>

</div>
</div>
@endforeach
</div>
</div>
@stop

