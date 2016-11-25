

@extends('layout.app')


@section('content')
<br>
<h1>Here you can Add categories</h1>
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
					<div id="categories-form"  class="panel panel-default">
						<div class="panel-heading" > Category</div>
						<form action="{{url('categories-store')}}" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
							<br/>
							Category Name
							<input type="text" name="category_name" class="form-control"><br/>
							Image
							<input type="file" name="category_image" class="form-control" >
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
							<div class="panel-heading">View Categories</div>

							<table class="table table-responsive table-hover"  width="100px" >
								<thead> 
									<th>Id</th>
									<th>Category Name</th>
									<th>Image</th>
									<th>Action</th>
								</thead> 
								@foreach($category as $categories)   
								<?php 
								$imagepath = '';
								$imagepath=url('images/category/'.$categories -> category_image);
								$edipath = url('categories-edit/' . $categories->id);
								$deletecategory = url('categories-delete/'.$categories->id);

								?>
								<tbody class="managerCategory"> 

									<tr>
										<td>{{ $categories -> id}}</td>
										<td ><p> <input type="hidden" value="{{$categories->id}}"> {{  $categories -> category_name }} </p></td>   
										<td><img src=" {{$imagepath}} " style="width: 90px;" ></td>
										<td>

											<p><a href="{{ $edipath}}"><i class="glyphicon glyphicon-pencil"></i>  Edit  </a></p>
											<p><a href="{{ $deletecategory }}"> <i class="glyphicon glyphicon-trash"></i> Delete</a></p>
										</td>
									</tr>    
									@endforeach

								</tbody>
							</table>
							{{ $category->links() }}
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
