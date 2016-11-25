
@extends('layout.app')

@section('content')
<br>
<br>
<div class="jumborton">
	<h1>Here you can edit products in your store</h1>
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
								
								
								<form  action="{{url('products-update')}}" method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
									<input type="hidden" name="id" value="{{$row->id}}">
									<br/>
									Product Name
									<input type="text" name="title" class="form-control" value="{{ $row->title }}" ><br/>
									Price
									<input type="text" name="price" class="form-control" value="{{$row->price}}" ><br/>
									Category
									<input type="hidden" name="old_category" value="{{$row->category_id }}">
									<select  class="form-control input-sm" name="category_id" id="category">
										<option value="{{$row->category->id}} " disabled selected> {{ $row->category->category_name }}</option>
										@foreach($category as $categories)
										<option   value="{{ $categories->id }}">
											{{ $categories -> category_name }}
										</option>
										@endforeach
									</select>
									<br>

									Subcategory
									<select  class="form-control input-sm" name="subcategory_id" id="subcategory">
										<option value="{{ $row->subcategory_id }}">
											{{ $row->subcategory->subcategory_name }}
										</option>
										
									</select>
									<br>
									
							@if($row->brand_id ==0 )			
									Brand
									<input type="hidden" name="old_brand" value="{{$row->brand_id}}">
									<select  class="form-control input-sm" name="brand_id"	>
										<option value="" disabled selected>Select Brand</option>
										@foreach($brand as $brands)
										<option   value="{{ $brands->id }}">
											{{ $brands -> brand_name}}
										</option>
										@endforeach
									</select>
							@else
									Brand
									<input type="hidden" name="old_brand" value="{{$row->brand_id}}">
									<select  class="form-control input-sm" name="brand_id"	>
										<option value=" {{ $row->brand_id }} " disabled selected>{{$row->brand->brand_name}}</option>
										@foreach($brand as $brands)
										<option   value="{{ $brands->id }}">
											{{ $brands -> brand_name}}
										</option>
										@endforeach
									</select>
							@endif		
									Description
									<input type="text" name="description" class="form-control" value="{{ $row->description}}"><br/>

									Stocks 
									<input type="text" name="stocks" class="form-control" value="{{$row->stocks}}">

									meta_description 
									<input type="text" name="meta_description" placeholder="optional" class="form-control">

									meta_keyword 
									<input type="text" name="meta_keyword" placeholder="optional" class="form-control">

									meta_title 
									<input type="text" name="meta_title" placeholder="optional" class="form-control">
									<br/>
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
											<th> ID</th>
											<th> Name</th>
											<th> Subcatagory</th>
											<th> Brand</th>
											<th> Price</th>
											<th>Action</th>
										</thead>	
										<tbody>	
											@foreach($products as $data)
											<tr>	
												<?php 
												$imagepath = '';
												if($data->brand_id==0){

												}else{
													$imagepath=url('images/brand/'.$data ->brand-> brand_image);
												}
												$image_category=url('images/category/'.$data ->category-> category_image);
												$editproduct= url('products-edit/'. $data->id);
												$add_image= url('products-image/'. $data->id);
												$deleteproduct = url('products-delete/'. $data->id);
												?>
												<td>{{$data -> id}}</td>
												<td>{{$data -> title}}</td>
												<td><img src="{{ $image_category }}" style=" width: 90px" ></td>
												<td>{{$data->subcategory -> subcategory_name}}</td>
											@if($data->brand_id==0)
												<td>No brand</td>
											@else
												<td><img src="{{ $imagepath }}" style=" width: 90px" ></td>	
											@endif
												<td>{{$data -> price}}</td>
												<td> 	
													<p><a href="{{ $editproduct}}"><i class="glyphicon glyphicon-pencil"></i> Edit </a></p>	
													<p><a href="{{ $add_image}}"> <i class="glyphicon glyphicon-plus"></i> Image</a></p>	
													<p><a href="{{ $deleteproduct }}"><i class="glyphicon glyphicon-trash"></i> Delete</a></p>

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

