@extends('backend.theme.mastertheme')
@section('main-content')


<!--breadcrumb-->
    <div class="p-3 page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">Product</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Add Product</li>
			</ol>
		</nav>
	</div>		
    </div>
<!--end breadcrumb-->

<!-- form table  -->

<div class="row">
	<div class="col-xl-9 mx-auto">
		<h2> Add Product </h2>
        <hr>
		<div class="card border-top border-0 border-4 border-info">
			<div class="card-body">
				<div class="border p-4 rounded">
					<form action="{{ route('insertproduct')}}" method="POST">
						@csrf
						<div class="row mb-3">
							<label for="name" class="col-sm-3 col-form-label">Product Name</label>
							<div class="col-sm-9">
								<input type="text" name="name" class="form-control" id="name" placeholder="Enter product Name">
							</div>
						</div>
						<div class="row mb-3">
							<label for="des" class="col-sm-3 col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="des" id="des" rows="3" placeholder="Product Description"></textarea>
							</div>
						</div>
						<div class="row mb-3">
							<label for="price" class="col-sm-3 col-form-label">Product Price</label>
							<div class="col-sm-9">
								<input type="text" name="price" class="form-control" id="price" placeholder=" product Price">
							</div>
						</div>
						<div class="row mb-3">
							<label for="quantity" class="col-sm-3 col-form-label">Product Quantity</label>
							<div class="col-sm-9">
								<input type="text" name="quantity" class="form-control" id="quantity" placeholder=" product quantity">
							</div>
						</div>
						<div class="row mb-3">
							<label for="status" class="col-sm-3 col-form-label"> Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control form-select" id="status">
									<option value="1">Active</option>
									<option value="2">InActive</option>
								</select>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-3 col-form-label"></label>
							<div class="col-sm-9">
								<button type="submit" class="btn btn-info px-5">Create</button>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection