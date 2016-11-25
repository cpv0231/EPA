

@extends('layout.app')


@section('content')
<br>
<h1>Here you can Add brands</h1>
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


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div id="brands-form"  class="panel panel-default">
						<div class="panel-heading" > Brand</div>
						<form action="{{url('brands-update')}}"  method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
							<br/>
							<input type="hidden" name="id" value="{{$row->id}}">
							Brand Name
							<input type="text" name="brand_name" class="form-control" value="{{ $row->brand_name }}"><br/>
							<?php 
							$imagepath = '';
							$imagepath=url('images/brand/'.$row -> brand_image);

							?>
							<img src="{{$imagepath}}" style="width:200px;">
							<input type="file" name="brand_image" class="form-control" >
							<br>
							<input type="submit" value="Save Category" class="btn btn-primary pull-right">
							<br><br><br>
						</form>
					</div>	

				</div>

				<div id="viewproducts">
					<div class="col-md-8" >
						<div class="row">
							<div class="panel panel-default">
								<div class="panel-heading">View brands</div>

								<table class="table table-responsive table-hover"  width="100px" >
									<thead> 
										<th>Id</th>
										<th>Category Name</th>
										<th>Image</th>
										<th>Action</th>
									</thead> 
									@foreach($brand as $brands)   
									<?php 
									$imagepath = '';
									$imagepath=url('images/brand/'.$brands -> brand_image);
									$edipath = url('brands-edit/' . $brands->id);
									$deletebrand = url('brands-delete/'.$brands->id);
									?>
									<tbody class="category"> 

										<tr>
											<td>{{ $brands -> id}}</td>
											<td ><p> <input type="hidden" value="{{$brands->id}}"> {{  $brands -> brand_name }} </p></td>   
											<td><img src=" {{$imagepath}} " style="width: 90px;" ></td>
											<td>
												<p><a href=" {{ $edipath }}"><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
												</p>
												
												<p><a href="{{$deletebrand }}"><i class="glyphicon glyphicon-trash"></i> Delete</a></p>
											</td>
										</tr>    
										@endforeach

									</tbody>
								</table>
								{{ $brand->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>
</div>

<script>
	var token = '{{Session::token()}}';
	var url = '{{ URL::to('edit') }}';
	var postCatId = '{{ Input::get('catid')  }}';
</script>
@stop
