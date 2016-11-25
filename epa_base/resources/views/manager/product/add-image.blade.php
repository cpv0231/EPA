

@extends('layout.app')

@section('content')
<br>
<br>
<div class="jumborton">
	<h1>Here you can add images for product {{ $products->title }}</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				@if($errors->has())
				<div id="form-errors" class="alert alert-danger">
					<p>The following errors have occurred:</p>

					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><!-- end form-errors -->
				@endif
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row"> 
					<div class="col-md-3" id="products-form" >
						<div class="row">
							<div class="panel panel-default">
								<div class="panel-heading">Add Products</div>
								<form  action="{{ url('products-imageupload') }}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
									<br/>
									Product {{ $products->title }}<br/><br>
									<div class="form-group"> 
										<input type="hidden" name="product_id" value="{{ $products->id }}">
										<input type="checkbox" name="front_image" value="1">
										<input type="hidden" name="number" value="{{$products->images->count()}}">
										<label for="">front image</label>
										<input type="hidden" name="product_name" value="{{$products->title}}">
										<input type="file" name="file"> 
										
									</div>
									<input type="submit" value="Save Product" class="btn btn-primary pull-right">
									<br>
								</form>
								<br>

							</div>
						</div>
					</div>
					<div id="viewproducts">
						<div class="col-md-8" >
							<div class="row">
								<div class="panel panel-default">
									<div class="panel-heading">View Products</div>


									<table class="table table-responsive table-hover"  >
										<thead>	
											<th>ID</th>
											<th> Product name</th>
											<th> Image</th>
											<th>Action</th>
										</thead>	
										<tbody>	
											@foreach($products->images as $data)
											<tr>	
												<?php 
												$imagedelete = url('products/'.$data->product->id .
													'/imagedelete/'.$data->id);
												?>
												<td>{{$data -> id}}</td>
												<td>
													{{$data->product ->title}}

												</td>
												<td>
													<img src="{{ url($data->file_path)  }}" style=" width: 90px" >
												</td>
												<td> 

													<input type="hidden" name="product" value="{{ $data ->product_id }}">	

													<p><a href="{{ $imagedelete}}"><i class="glyphicon glyphicon-trash"></i> delete</a></p>
												</td>
											</tr>	
											@endforeach
											<br/><br/>

										</tbody>
									</table>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
<hr>




@stop

