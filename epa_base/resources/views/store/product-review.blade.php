
@extends('layout.app')
<div class="review-title-box">
  <div class="container">
    <div class="row"> 
      <div class="col-md-6">
        <div class="review-title">
          <h4><strong>{{$products->title}}</strong></h4>
          <h5>Write a review <i class="glyphicon glyphicon-pencil"></i></h5>
          @foreach($review as $product_review)
          @if($product_review->rate== 1)
          <div class="rating col-sm-3">
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div> (4)
          @elseif($product_review->rate== 2)
          <div class="rating col-sm-3">
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div> (4)

          @elseif($product_review->rate== 3)
          <div class="rating col-sm-3">
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div> (4)

          @elseif($product_review->rate== 4)
          <div class="rating col-sm-3">
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div> (4)

          @elseif($product_review->rate== 5)
          <div class="rating col-sm-3">
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
           
          </div> (4)

          @elseif($review>0)
          <div class="rating col-sm-3">
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="price-text-color fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div> (4)

          @else
          <div class="rating col-sm-3">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div> (4)
          @endif
          @endforeach
        </div>
      </div>
      <div class="col-md-6">
        <div class="wishlist">
          <form action="{{url('store-addwishlist')}}" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="product_id" value="{{$products->id}}">
            <h3>  <button class=" btn btn-primary  ">  <i class="glyphicon glyphicon-heart"></i> Add to wishlist </h3></button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
     <?php 
     $imagepath = '';
     foreach($productimg as $data) {
      if($products->id == $data->id){
        foreach ($data->images as $img) {
          if($img->is_front==1){
            $imagepath= url($img->file_path);      
          }else if($img->is_front==0){
            $image_notfront= url($img->file_path);         
          }else{
            $image_notfront = url($img->file_path);
          }
        }
      }
    }
    ?> 
    <br>
    <img id="img_01" src="{{url($imagepath)}}" style="width:400px; height: 400px;" data-zoom-image="{{url($imagepath)}}"/>  
  </div>


  <div class="col-md-8">
    <div class="review-details">
      <h3>{{$products->title}}</h3>
      <div class="rating col-sm-3">
        <i class="price-text-color fa fa-star"></i>
        <i class="price-text-color fa fa-star"></i>
        <i class="price-text-color fa fa-star"></i>
        <i class="price-text-color fa fa-star"></i>
        <i class="fa fa-star"></i>
        (4)
      </div>
      <h3 class="review-price">Price: ₱{{$products->price}}</h3>
      <h4 class="review-instock">In stock</h4>
      <div class="Quantity">
        <form action=" {{url('review-postcart')}} " method="post">
          How many items would you like to buy?<br>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="price" value="{{$products->price}}">
          <input type="hidden" name="product" value="{{$products->id}}">
          <input type="number" name="quantity" min="1" max="{{$products->stocks}}" placeholder="   1  "><br><br><br>
          <button class="btn btn-primary review-addtocart">ADD TO CART</button>
        </form>

      </div>
    </div>
  </div>

  <div class="col-md-1 hidden-sm">

  </div>
</div>


<div class="review-form">
  <div class="container">
    <div class="row">
      <div class="review-rate">
        <div class="col-md-12">
          <h3>Related Products for {{$products->title}} </h3>
          @foreach($related_products as $related)
          <?php 
          $imagepath = '';
          foreach($productimg as $data) {
            if($related->id == $data->id){
              foreach ($data->images as $img) {
                if($img->is_front==1){
                  $imagepath= url($img->file_path);      
                }else if($img->is_front==0){
                  $image_notfront= url($img->file_path);         
                }else{
                  $image_notfront = url($img->file_path);
                }
              }
            }
          }
          ?> 
          <div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
            <div class="col-item">
              <div class="photo">
                <img src="{{$imagepath}}" class="img-responsive" alt="a" />
              </div>
              <div class="info">
                <div class="row">
                  <div class="price col-md-6">
                    <h6>
                     {{$related->title}}
                   </h6>
                   <h5 class="price-text-color">
                    ₱{{$related->price}}</h5>
                  </div>
                  <div class="rating hidden-sm col-md-6">
                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                  </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                </i><i class="fa fa-star"></i>
              </div>
            </div>
            <div class="separator clear-left">

              @if(Auth::check())
              <div id="authchecked">
                <form action="{{URL::to('store-cart/')}}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="product" value="{{$related->id}}">
                  <input type="hidden" name="price" value="{{$related->price}}">
                  <input type="hidden" name="quantity" value="1">
                  <p class="btn-add">
                    <button><i class="fa fa-shopping-cart"></i>Add to cart</button>
                  </p>
                </form>
              </div>
              @else
              <p class="btn-add">
               <button ><i class="fa fa-shopping-cart"></i> <a href="{{url('users/signin')}}">Add to cart</a> </button>
             </p>
             @endif
             <p class="btn-details">
              <i class="fa fa-list"></i><a href="{{URL::to('product-review/'. $related->id) }}" class="hidden-sm">More details</a></p>
            </div>
            <div class="clearfix">
            </div>
          </div>
        </div>
      </div> 
      @endforeach



    </div>
  </div>
</div>
</div>
</div>




<div class="review-form-fillup">
  <div class="container">
    <div class="row">
      <div class="review-rate">
        <div class="col-md-12">
          <h3>Rating & Reviews of {{$products->title}} <i class="glyphicon glyphicon-envelope"></i> </h3>

          <div class="row">

            <div class="col-md-6">
              <div class="review-form-description"> 
                @if(Auth::check())
                <div class="stars">
                  <form action="{{url('post-review')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="star star-5" id="star-5" type="radio" name="rate" value="5" />
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="rate" value="4"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="rate" value="3"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="rate" value="2"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="rate" value="1"/>
                    <label class="star star-1" for="star-1"></label>

                  </div>
                  <input type="hidden" name="product_id" value="{{$products->id}}">
                  <h4>Review title:</h4>
                  <input type="text" name="review_title" placeholder="Type your review title here">
                  <h4>Review description</h4>
                  <textarea cols="40" name="review_description" rows="5" placeholder="Type your review title here"></textarea>
                  <button class="btn btn-primary review-submit">SUBMIT</button>
                </form>
                @else
                <h5><a href="{{url('users/signin')}}">Signin now</a> </h5>
                <div class="stars">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="star star-5" id="star-5" type="radio" name="rate" value="5" />
                  <label class="star star-5" for="star-5"></label>
                  <input class="star star-4" id="star-4" type="radio" name="rate" value="4"/>
                  <label class="star star-4" for="star-4"></label>
                  <input class="star star-3" id="star-3" type="radio" name="rate" value="3"/>
                  <label class="star star-3" for="star-3"></label>
                  <input class="star star-2" id="star-2" type="radio" name="rate" value="2"/>
                  <label class="star star-2" for="star-2"></label>
                  <input class="star star-1" id="star-1" type="radio" name="rate" value="1"/>
                  <label class="star star-1" for="star-1"></label>

                </div>
                <input type="hidden" name="product_id" value="{{$products->id}}">
                <h4>Review title:</h4>
                <input type="text" name="review_title" placeholder="Type your review title here">
                <h4>Review description</h4>
                <textarea cols="40" name="review_description" rows="5" placeholder="Type your review title here"></textarea>
                <button class="btn btn-primary review-submit" disabled="disabled">SUBMIT</button>

                @endif



              </div>
            </div>
            <div class="col-md-4 img-fillup">
              <img src="{{$imagepath}}">
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

<div class="review-form-fillup">
  <div class="container">
    <div class="row review-rate-fillup">
      <div class="col-md-12 ">
        <h3>Rating & Reviews of {{$products->title}} <i class="glyphicon glyphicon-envelope"></i> </h3>
        <div class="row">
          <div class="col-md-12">
            <div class="review-form-list"> 
              <h4>Products Review ({{$review->count()}})</h4>
            </div>
          </div>
          @if($review->count()>0)
          @foreach($review as $product_review)
          <div class="row">
            <div class="col-md-12">
             <div class="review-description">
              <h5>Title: <strong>{{ $product_review->review_title }}</strong> </h5>
              <h5>Rate:<strong> {{ $product_review->rate }}</strong></h5>
              <h5>Description: <strong>{{ $product_review->review_description }}</strong> </h5>
              @foreach($user as $user_name)
              @if($user_name->id == $product_review->user_id)
              <h5>Registered user: <strong>{{ $user_name->firstname }}</strong></h5>
              @endif
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
        @else

        <div class="row">
          <div class="col-md-12">
           <div class="review-description">
            <h5>Title: <strong></strong> </h5>
            <h5>Rate:<strong></strong></h5>
            <h5>Description: <strong></strong> </h5>
            <h5>Registered user: <strong></strong></h5>
          </div>
        </div>
      </div>

      @endif

    </div>
  </div>
</div>
</div>
</div>