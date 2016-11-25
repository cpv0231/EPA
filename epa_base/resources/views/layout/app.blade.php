<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>EPA SOLUTION</title>

  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('fonts/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/jquery-ui.css') }}">

  <link rel="shortcut icon" type="image/png" href="{{URL::to('images/favicon/logo.png')}}"/>

  <link href="{{ URL::to('css/demo.css') }} " rel="stylesheet">
  

</head>
<body >
 <div class="row">
  <div class="col-md-12">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span><i class="icon-bar"></i><span class="icon-bar"></span><span class="icon-bar"></span>
       </button> <a class="navbar-brand" href="/epa">EPA SOLUTION</a>
     </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" >
        @foreach($category as $navcat)
        <li class="dropdown"  value="{{$navcat->id}}">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $navcat -> category_name}}<strong class="caret"></strong></a>
         <ul class="dropdown-menu">
          @foreach($navcat -> subcategories as $subcat)
          <li><a href="{{URL::to('subcategory/'.$subcat->id) }}">{{ $subcat->subcategory_name }}</a></li>
          @endforeach
        </ul>

      </li>
      @endforeach          
    </ul>
    <form class="navbar-form navbar-left" role="search" >
      <div class="form-group">
        <input type="text" name="keyword" id="keyword" placeholder="Product" class="form-control" >
      </div> 
      <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li>
        @if(Auth::check())
        <a href="{{URL::to('store-viewcart')}}"><i class="glyphicon glyphicon-shopping-cart"></i>  View Cart
         <span class="badge"> {{$cart}} </span>
         @else
         <a href="{{URL::to('users/signin/') }}"><i class="glyphicon glyphicon-shopping-cart"></i>  View Cart

           <span class="badge"> 0 </span>
           @endif
         </a>
       </li>
       @if(Auth::check())

       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> {{Auth::user()->firstname }}<strong class="caret"></strong></a>
         <ul class="dropdown-menu">

           @if(Auth::user()->user_type_id == 2)
           <li>
             <a href="{{ url('categories') }}"><i class="glyphicon glyphicon-th-list"></i> Categories</a>
           </li>
           <li>
             <a href="{{ url('subcategories') }}"><i class="glyphicon glyphicon-th-list"></i> Subcategories</a>
           </li>

           <li>
             <a href="{{ url('brands') }}"><i class="glyphicon glyphicon-th-list"></i> Brands</a>
           </li>
           <li>
            <a href="{{ url('products') }}"><i class="glyphicon glyphicon-pencil"></i> Products</a>
          </li>
          <li>
            <a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i>Dashboard</a>
          </li>                   
          @endif 

          <li>
            <a href="#"><i class="glyphicon glyphicon-phone"></i> Profile</a>
          </li>
          <li>
            <a href=" {{URL::to('store-wishlist')}} "><i class="glyphicon glyphicon-heart"></i> Wishlist</a>
          </li>

          <li>
            <a href="{{ URL::to('/store/vieworders') }}"><i class="glyphicon glyphicon-phone"></i> Orders</a>
          </li>

          <li class="divider"></li>
          <li>
            <a href="{{URL::to('users/signout')}}"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
          </li>
        </ul>
      </li>


      @else

      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Signin<strong class="caret"></strong></a>
       <ul class="dropdown-menu">
        <li>
          <a href="{{URL::to('users/signin')}}"><i class="glyphicon glyphicon-log-in"></i>
            Sign in</a>
          </li>
          <li>
            <a href="{{URL::to('users/newaccount')}}"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
          </li>
        </ul>
      </li>
      @endif

    </ul>
  </div>

</nav>


@if (Session::has('message'))
<div id="divSession">
  <div class="alert alert-info">
   {{Session::get('message')}} 
 </div>
</div>

@elseif (Session::has('error'))
<div id="divSession">
  <div class="alert alert-danger">
    <strong>Opps</strong> {{Session::get('error')}} 
  </div>
</div>
@endif

@yield('carousel')

@yield('sidebar')

@yield('content')

<section class="testimonial">
  <div class="container">
    <img src="{{url('images/cover/cover.jpg')}}">
  </div>
</section>

<section class="why-us">
  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <h3>Location</h3>
        <p>
          Cyberzone 3F/ SM Lucena City,
        </p>
        <p>
          Corner Dalahican RD. Ibabang Dupay RED-V 
        </p>
        <p>Lucena City</p>
      </div> 

      <div class="col-sm-4">
        <h3>Privacy</h3>
        <p>
          Lorem ipsum dolor sit amet, ne falli eripuit facilisis eum, movet tation cum cu. No sit fabulas constituto efficiendi, aliquam dignissim eos an, autem menandri repudiare usu ut. Qui lucilius platonem in. Duo ignota petentium ad. Pro ei movet patrioque.

          Ea prima graece eam, mei veri insolens scripserit eu. Ad oblique invidunt vis, te corpora consequat omittantur eum, probo graeci an eam. His ad rebum vocent maluisset, ei pri dicam graece consectetuer. Facilisi adolescens sadipscing cu per. Duo ne adhuc facer, magna doctus duo eu, mei aliquip quaeque scripserit ei.
        </p>
      </div> 
      <div class="col-sm-4">
        <h3>Connect with us</h3>
        <p>
        <img src="{{ url('images/facebook.png') }}" style="width: 50px; height: 50px;">
        </p>
      </div> 


    </div>
  </div>
</section>

<div id="footer">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">
        &copy; 2016 EPA Solution. Theme designed by BA.
      </h3>
    </div>
  </div>
</div>
<script src="{{ URL::to('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
<script src="{{URL::to('js/jquery.elevatezoom.js') }}"></script>
<script src="{{URL::to('js/jquery-ui.js') }}"></script>
<script src="{{URL::to('js/scripts.js') }}"></script>
<script src="{{URL::to('js/address.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85565689-1', 'auto');
  ga('send', 'pageview');

  
</script>

</body>
</html>