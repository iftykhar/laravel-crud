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
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#add"><div class="font-22 text-primary"><i class="lni lni-circle-plus"></i></div></button>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="alldata">
                      
                    </tbody>
                </table>
                
                <!-- Modal for category add-->
					<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="form-control mt-3">
                                            <label for="name">Category Name</label>
                                            <input type="text" name="name" id="name" class="category-name form-control">
                                        </div>
                                        <div class="form-control mt-3">
                                            <label for="des">Category Description</label>
                                            <input type="text" name="des" id="des" class="category-des form-control">   
                                        </div>
                                        <div class="form-control mt-3">
                                            <select name="status" class="form-control category-status" id="status">
                                                <option value="">----select values----</option>
                                                <option value="1">Active</option>
                                                <option value="2">InActive</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                    <a type="button"  class="add-category btn btn-primary">Add</a>
                                    <button type="button" style="display:none" class="update-category btn btn-primary">Update</button>
                                </div>
							</div>
						</div>
					</div>
            </div>
        </div>
    </div>
</div>
    <!-- For Delete Category Modal -->
	<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    Are you sure want to delete this item?
                </div>
                <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button id="m-cat-delete-btn" type="button" class="add-category btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
@endsection