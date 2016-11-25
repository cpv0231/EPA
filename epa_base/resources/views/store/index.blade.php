
@extends('layout.app')



@section('carousel')
<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/logo/epalogo.jpg" alt="First slide" >
      <!-- Static Header -->
    </div>
    <div class="item">
      <img src="images/logo/epalogo2.jpg" alt="Second slide">
      <!-- Static Header -->
      <div class="header-text hidden-xs">
        <div class="col-md-12 text-center">

        </div>
      </div><!-- /header-text -->
    </div>
    <div class="item">
      <img src="images/logo/epalogo3.jpg" alt="Third slide">
      <!-- Static Header -->
      <div class="header-text hidden-xs">
        <div class="col-md-12 text-center">

        </div>
      </div><!-- /header-text -->
    </div>
    <div class="item">
      <img src="images/logo/epalogo4.jpg" alt="Third slide">
      <!-- Static Header -->
      <div class="header-text hidden-xs">
        <div class="col-md-12 text-center">

        </div>
      </div><!-- /header-text -->
    </div>
  </div>
</div>

@stop

@section('content')



<div class="category"> 
  <hr>
  <h2 class="shopbrands">Shop by Categories</h2>
  <div class="row">
    @foreach($category as $navcat)
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail hovereffect" >
        <img src="images/category/{{ $navcat->category_image }}" alt="...">
        <div class="overlay">
          <h2>{{ $navcat->category_name }}</h2>
          <p> 
            @foreach($navcat->subcategories as $subcat)
            <a href=" {{url('subcategory/'.$subcat->id)}} ">{{ $subcat->subcategory_name }}</a>
            <br>
            @endforeach
          </p> 
        </div>
        <div class="caption">
         <h3> {{$navcat->category_name}}</h3>
       </div>
     </div>
   </div>
   @endforeach
 </div>
</div>

<hr>
<div class="brands"> 
  <div class="container">
    <h2 class="shopbrands">op by Brands</h2>
    <div class="row">
      @foreach($brands as $brand)
      <div class="col-sm-6 col-md-2 col-xs-6">
        <div id="brands" >
          <img src="images/brand/{{ $brand->brand_image }}" alt="...">
        </div>
      </div>  
      @endforeach
    </div>
  </div>
</div>
<hr>


<div class="review-form">
  <div class="container">
    <div class="row">
      <div class="review-rate">
        <div class="col-md-12">
          <h3>Best Processors</h3>   
          @foreach($processor as $processors)
          <?php 
          $imagepath = '';
          foreach($products as $data) {
            if($processors->id == $data->id){
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
               <a class="view" href="{{URL::to('product-review/'. $processors->id) }}">
                <img src="{{$imagepath}}" class="img-responsive" alt="a" />
              </a>
            </div>
            <div class="info">
              <div class="row">
                <div class="price col-md-6">
                  <h6>
                   {{$processors->title}}
                 </h6>
                 <h5 class="price-text-color">
                  ₱{{$processors->price}}</h5>
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
                <input type="hidden" name="product" value="{{$data->id}}">
                <input type="hidden" name="price" value="{{$data->price}}">
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
            <i class="fa fa-list"></i><a href="{{URL::to('product-review/'. $processors->id) }}" class="hidden-sm">More details</a></p>
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

<div class="review-form">
  <div class="container">
    <div class="row">
      <div class="review-rate">
        <div class="col-md-12">
          <h3>Best Fan</h3>   
          @foreach($fan as $fans)
          <?php 
          $imagepath = '';
          foreach($products as $data) {
            if($fans->id == $data->id){
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
               <a class="view" href="{{URL::to('product-review/'. $fans->id) }}">
                <img src="{{$imagepath}}" class="img-responsive" alt="a" />
              </a>
            </div>
            <div class="info">
              <div class="row">
                <div class="price col-md-6">
                  <h6>
                   {{$fans->title}}
                 </h6>
                 <h5 class="price-text-color">
                  ₱{{$fans->price}}</h5>
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
              <input type="hidden" name="product" value="{{$data->id}}">
              <input type="hidden" name="price" value="{{$data->price}}">
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
          <i class="fa fa-list"></i><a href="{{URL::to('product-review/'. $processors->id) }}" class="hidden-sm">More details</a></p>
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



<div class="review-form">
  <div class="container">
    <div class="row">
      <div class="review-rate">
        <div class="col-md-12">
          <h3>Best Processors</h3>   
          @foreach($case as $cases)
          <?php 
          $imagepath = '';
          foreach($products as $data) {
            if($cases->id == $data->id){
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
                <a class="view" href="{{URL::to('product-review/'. $cases->id) }}">
                  <img src="{{$imagepath}}" class="img-responsive" alt="a" />
                </a>
              </div>
              <div class="info">
                <div class="row">
                  <div class="price col-md-6">
                    <h6>
                     {{$cases->title}}
                   </h6>
                   <h5 class="price-text-color">
                    ₱{{$cases->price}}</h5>
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
                <input type="hidden" name="product" value="{{$data->id}}">
                <input type="hidden" name="price" value="{{$data->price}}">
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
            <i class="fa fa-list"></i><a href="{{URL::to('product-review/'. $processors->id) }}" class="hidden-sm">More details</a></p>
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



@stop

