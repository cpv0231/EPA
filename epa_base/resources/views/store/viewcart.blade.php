@extends('layout.app')
@section('content')
<br>
<div class="cart">

  <br><br>
<h3 >{{Auth::user()->firstname}}'s shopping cart </h3>

@if($cart>0)
<div class="container">
  <div class="table-responsive">
   <table class="table table-hover">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>


     @foreach($products_cart as $cart_item)

     <?php 
     $imagepath = '';
     foreach ($product as $data) {
      if($cart_item->Products->id == $data->id){
        foreach ($data->images as $img) {
          $imagepath= url($img->file_path);
        }
      }
    }
    ?> 
    <tr>
      <td><img src="{{$imagepath}}" width="70px" height="auto">{{$cart_item->Products->title}}</td>

      <td> 
        @if($cart_item->quantity < $cart_item->Products->stocks)

        <form action="{{url('/cart-plus/')}}" style="float: left;" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="product" value="{{$cart_item->Products->id}}">
          <input type="hidden" name="price" value="{{$cart_item->Products->price}}">
          <input type="hidden" name="quantity" value="{{$cart_item->quantity}}">
          <button id="add"> + </button> 
        </form>
        <input style="float: left;" class="cart_quantity_input" type="text" min="0" name="quantity" value="{{$cart_item->quantity}}" autocomplete="off" size="1"/>
        @else
        <button id="add" disabled="disabled"> + </button> 


        <input class="cart_quantity_input" type="text" min="0" name="quantity" value="{{$cart_item->Products->stocks}}" autocomplete="off" size="1"/>


        @endif

        @if( $cart_item->quantity > 1 )
        <form action="{{url('/cart-minus/')}}" id="minus" method="post" ">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="product" value="{{$cart_item->Products->id}}">
          <input type="hidden" name="price" value="{{$cart_item->Products->price}}">
          <input type="hidden" name="quantity" value="1">
          <button  id="minus">-</button> 
        </form>
        @else
        <button  disabled="disabled" id="minus">-</button> 
        @endif

      </td>
      <td>₱{{$cart_item->Products->price}}</td>
      <td>₱{{$cart_item->total_price}}</td>
      <td>

        <a href="cart/delete/{{$cart_item->id }} " class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i></a>
      </td>

    </div>
  </tr>
  @endforeach
  <tr>
    <td></td>
    <td></td>
    <td><br><br><h2>Total</h2></td>
    <td><br><br><h3>₱{{$cart_total}}</h3></td>
    <td></td>
  </tr>
</tbody>
</table>

</div>
<div id="checkout">
  <h4><a href="{{ url('checkout')}}">Proceed to checkout</a></h4>
</div>
@endif
</div>


<div class="review-form">
  <div class="container">
    <div class="row">
      <div class="review-rate">
        <div class="col-md-12">
          <h3>Suggested Products</h3>
          <div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
            <div class="col-item">
              <div class="photo">
                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
              </div>
              <div class="info">
                <div class="row">
                  <div class="price col-md-6">
                    <h5>
                      Sample Product</h5>
                      <h5 class="price-text-color">
                        $199.99</h5>
                      </div>
                      <div class="rating hidden-sm col-md-6">
                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                      </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                    </i><i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="separator clear-left">
                  <p class="btn-add">
                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                    <p class="btn-details">
                      <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                  </div>
                </div>
              </div> 

              <div class="col-sm-3">
                <div class="col-item">
                  <div class="photo">
                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                  </div>
                  <div class="info">
                    <div class="row">
                      <div class="price col-md-6">
                        <h5>
                          Sample Product</h5>
                          <h5 class="price-text-color">
                            $199.99</h5>
                          </div>
                          <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                          </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                        </i><i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="separator clear-left">
                      <p class="btn-add">
                        <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                        <p class="btn-details">
                          <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                        </div>
                        <div class="clearfix">
                        </div>
                      </div>
                    </div>
                  </div> 

                  <div class="col-sm-3">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>
                              Sample Product</h5>
                              <h5 class="price-text-color">
                                $199.99</h5>
                              </div>
                              <div class="rating hidden-sm col-md-6">
                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                              </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                            <p class="btn-details">
                              <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                          </div>
                        </div>
                      </div> 


                      <div class="col-sm-3">
                        <div class="col-item">
                          <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                          </div>
                          <div class="info">
                            <div class="row">
                              <div class="price col-md-6">
                                <h5>
                                  Sample Product</h5>
                                  <h5 class="price-text-color">
                                    $199.99</h5>
                                  </div>
                                  <div class="rating hidden-sm col-md-6">
                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                  </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="fa fa-star"></i>
                              </div>
                            </div>
                            <div class="separator clear-left">
                              <p class="btn-add">
                                <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                <p class="btn-details">
                                  <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                </div>
                                <div class="clearfix">
                                </div>
                              </div>
                            </div>
                          </div> 

                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="review-form">
                  <div class="container">
                    <div class="row">
                      <div class="review-rate">
                        <div class="col-md-12">
                          <h3>Related Products</h3>
                          <div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
                            <div class="col-item">
                              <div class="photo">
                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                              </div>
                              <div class="info">
                                <div class="row">
                                  <div class="price col-md-6">
                                    <h5>
                                      Sample Product</h5>
                                      <h5 class="price-text-color">
                                        $199.99</h5>
                                      </div>
                                      <div class="rating hidden-sm col-md-6">
                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                      </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                    </i><i class="fa fa-star"></i>
                                  </div>
                                </div>
                                <div class="separator clear-left">
                                  <p class="btn-add">
                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                  </div>
                                </div>
                              </div> 

                              <div class="col-sm-3">
                                <div class="col-item">
                                  <div class="photo">
                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                  </div>
                                  <div class="info">
                                    <div class="row">
                                      <div class="price col-md-6">
                                        <h5>
                                          Sample Product</h5>
                                          <h5 class="price-text-color">
                                            $199.99</h5>
                                          </div>
                                          <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                          </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                      </div>
                                    </div>
                                    <div class="separator clear-left">
                                      <p class="btn-add">
                                        <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                          <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                      </div>
                                    </div>
                                  </div> 

                                  <div class="col-sm-3">
                                    <div class="col-item">
                                      <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                      </div>
                                      <div class="info">
                                        <div class="row">
                                          <div class="price col-md-6">
                                            <h5>
                                              Sample Product</h5>
                                              <h5 class="price-text-color">
                                                $199.99</h5>
                                              </div>
                                              <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                              </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                          </div>
                                        </div>
                                        <div class="separator clear-left">
                                          <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                            <p class="btn-details">
                                              <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                          </div>
                                        </div>
                                      </div> 


                                      <div class="col-sm-3">
                                        <div class="col-item">
                                          <div class="photo">
                                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                          </div>
                                          <div class="info">
                                            <div class="row">
                                              <div class="price col-md-6">
                                                <h5>
                                                  Sample Product</h5>
                                                  <h5 class="price-text-color">
                                                    $199.99</h5>
                                                  </div>
                                                  <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                  </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                              </div>
                                            </div>
                                            <div class="separator clear-left">
                                              <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                                <p class="btn-details">
                                                  <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                              </div>
                                            </div>
                                          </div> 

                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                                @stop

