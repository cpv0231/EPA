@extends('layout.app')

@section('carousel')
<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{url('images/logo/epalogo.jpg')}}" alt="First slide">
      <!-- Static Header -->
    </div>
    <div class="item">
      <img src="{{url('images/logo/epalogo2.jpg')}}" alt="Second slide">
      <!-- Static Header -->
      <div class="header-text hidden-xs">
        <div class="col-md-12 text-center">

        </div>
      </div><!-- /header-text -->
    </div>
    <div class="item">
      <img src="{{url('images/logo/epalogo.jpg')}}" alt="Third slide">
      <!-- Static Header -->
      <div class="header-text hidden-xs">
        <div class="col-md-12 text-center">

        </div>
      </div><!-- /header-text -->
    </div>
  </div>
</div>

@stop
@section('sidebar')
<hr>
<h1 align="center">{{ $subcategories->subcategory_name}}</h1>   
<input type="hidden" name="id" value="{{$subcategories->id}}">
<hr>
<div class="container"> 
  <div class="row">
    <div class="col-md-11 ">
      <div id="sort">
        <select class="input-sm selectpicker ">
          <option value="" disabled selected> Sort by:</option>
          <option value="DESC">
            Price: High to Low
          </option>
          <option value="ASC">
            Price Low to High  
          </option>

        </select>
      </div>  
    </div>
  </div>
</div>
<div class="col-md-2" id="sidebar" >
 <h3>Categories</h3>
 <hr>
 <ul class="main-nav-ul">
  @foreach($category as $navcat)
  <li class="has-sub" value="{{$navcat->id}}">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $navcat -> category_name}}<span class="badge">{{ $navcat->products->count() }}</span>
     <strong class="caret"></strong>
   </a>
   <ul>
    @foreach($navcat -> subcategories as $subcat)
    <li><a href="{{URL::to('subcategory/'.$subcat->id) }}" value="">{{ $subcat->subcategory_name }}- ({{ $subcat->products->count() }})</a></li>
    @endforeach
  </ul>

</li>
@endforeach          
</ul>

<h3>Brands</h3>
<hr>
  <ul>
    @foreach($brands as $brand)
    <?php
    $brands = Input::has('brands') ? Input::get('brands'): [];
    $brand_id = $brand->id;
    ?>        
    <input type="checkbox" name="brands[]" value="{{$brand_id}}"{{ in_array( $brand_id  , $brands) ? 'checked': ''  }} >{{$brand->brand_name}}<br>
    @endforeach
  </ul>

  <h3>Price</h3>
  <hr>
  <ul>
    Price : <span id="spanOutput"></span>
    <br /><br />
    <div id="slider"></div>
    <br />

    <input id="min_price" value="{{ Input::get('min_price') }}" name="min_price" type="hidden" />
    <br /><br />
    <input id="max_price" value="{{ Input::get('max') }}" name="max_price" type="hidden" />

  </ul>

</div>

@stop

@section('content')

<div class="container">
<div class="col-md-9" >
  <div class="row">
  <br>
    <div class="preload">
    <img src="{{url('images/preloader/loading_spinner.gif')}}" />
    </div>

    <div class="productsAjax">
      @foreach ($products as $data) 
      <div class="col-md-4 col-lg-3 col-sm-6 col-xs-8 ">
        <div class="thumbnail" id="productThumbnail">
          <a class="view" href="{{URL::to('product-review/'. $data->id) }}">
          @foreach($data->images as $img)
          @if($img->is_front==1)
          <img src=" {{ url('/'.$img -> file_path)}} ">
          @endif
          @endforeach
           </a>
          @if(Auth::check())
          <div id="authchecked">
            <form action="{{URL::to('store-cart/')}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="product" value="{{$data->id}}">
              <input type="hidden" name="price" value="{{$data->price}}">
              <input type="hidden" name="quantity" value="1">
              <button id="addtocart"  class="btn btn-primary pull-right"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button> 
            </form>
          </div>
          @else
          <div id="authguest">
            <a href=" {{URL::to('users/signin')}} " id="addtocart" class="btn btn-primary pull-right"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
          </div>
          @endif

          <h4>{{$data->title}}</h4>
          <p>
            <strong><div class="price-text-color"> ₱{{$data->price}}</div></strong>
          </p>

        </div>
      </div>
      @endforeach   

    </div>

    </div>
  </div>
  </div>

  <script type="text/javascript">
    var token = '{{Session::token()}}';
    var urlSubcategory = '{{$subcategories->id}}';
    var urlSearch = '{{ URL::to('epa/ajax-search') }}';
    var urlPrice = '{{ URL::to('epa/ajax-price') }}';
    var urlSort = '{{ URL::to('epa/ajax-sortproducts') }}';
    var urlBrands ='{{ URL::to('ajax-brands') }}';
    var urlProducts = '{{ URL::to('ajax-products') }}';

  </script> 

  @stop

