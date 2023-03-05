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
				<li class="breadcrumb-item active" aria-current="page"> Product List</li>
			</ol>
		</nav>
	</div>		
    </div>
<!--end breadcrumb-->
<div class="container p-3">
    <div class="card ">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        
                        
                    
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->des }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                @if($product->status == 1)
                                    <a href="{{ route('activeproduct',$product->id) }}" class="btn btn-success btn-sm">Active</a>
                                @else
                                    <a href="{{ route('inactiveproduct',$product->id) }}" class="btn btn-info btn-sm">InActive</a>
                                @endif

                            </td>
                            <td>
                                <a href="{{ route('editproduct',$product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <button data-bs-toggle="modal" data-bs-target="#delete{{ $product->id }}"  class="btn btn-danger btn-sm">Delete</button data-bs-toggle="modal" data-bs-target="#">
                            </td>
                        </tr>
                        <!-- Modal -->
						<div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">Are you sure to want to delete this?</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
										<a type="button" href="{{ route('deleteproduct',$product->id) }}" class="btn btn-primary">Yes</a>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection