

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
						<div class="panel-heading" > Subcategory</div>
							<form id="categories-form" action="{{ url('subcategories-store') }}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
							<br/>
							Category
								<select class="form-control input-sm" name="category_id" >
								<option value="" disabled selected>Select your option</option>
								@foreach($category as $categories)
								<option value="{{ $categories->id }}">
									{{ $categories -> category_name}}
								</option>
								@endforeach		
								</select>


							Subcategory
							<input type="text" name="subcategory_name" class="form-control"><br/>
							<input type="submit" value="Save Category" class="btn btn-primary  pull-right">
					</form>
					</div>	
				</div>

			<div id="viewproducts">
				<div class="col-md-8" >
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">View Subcategory</div>

							<table class="table table-responsive table-hover"  width="100px" >
								<thead> 
									<th>Id</th>
									<th>Category Name</th>
									<th>Subcategory name</th>
									<th>Action</th>
								</thead> 
								@foreach($subcategories as $subcategory)   
								<?php 
								$imagepath = '';
								$imagepath=url('images/category/'.$subcategory ->category-> category_image);
								$edipath = url('subcategories-edit/' . $subcategory->id);
								$deletesubcategories = url('subcategories-delelte/'.$subcategory->id);
								?>
								<tbody class="managerSubcategory"> 

									<tr>
										<td>
											{{ $subcategory -> id}}
										</td>

										<td >
											<img src=" {{$imagepath}} " style="width: 90px;" >
											 {{  $subcategory->category -> category_name }} 
										
										</td>

										<td>
											{{$subcategory->subcategory_name}}
										</td>

										<td>
											<p><a href="{{$edipath}}"><i class="glyphicon glyphicon-pencil"></i> Edit  </a></p>
											<p><a href="{{ $deletesubcategories }}"><i class="glyphicon glyphicon-trash"></i> Delete</a></p>
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
