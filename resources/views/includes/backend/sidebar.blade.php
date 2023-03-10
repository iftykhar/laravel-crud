
<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Laravel CRUD</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="{{ route('home') }}"><i class="bx bx-right-arrow-alt"></i>Default</a>
						</li>
						<!-- <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
						</li>
						<li> <a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
						</li>
						<li> <a href="dashboard-digital-marketing.html"><i class="bx bx-right-arrow-alt"></i>Digital Marketing</a>
						</li>
						<li> <a href="dashboard-human-resources.html"><i class="bx bx-right-arrow-alt"></i>Human Resources</a>
						</li> -->
					</ul>
				</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Product</div>
					</a>
					<ul>
						<li>
							<a href="{{ route('addproduct')}}">
								<div class="parent-icon"><i class='bx bx-cookie'></i>
								</div>
								<div class="menu-title">Add product</div>
							</a>
						
						</li>
						<li>
							<a href="{{ route('showproduct')}}">
								<div class="parent-icon"><i class='bx bx-cookie'></i>
								</div>
								<div class="menu-title">Show Product</div>
							</a>
						</li>
					</ul>
					
				</li>
				
				<ul>
						<li class="menu-label">UI Elements</li>
							<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class='bx bx-home-circle'></i>
							</div>
							<div class="menu-title">Category</div>
						</a>
						<ul>
							<li>
								<a href="{{ route('addcategory')}}">
									<div class="parent-icon"><i class='bx bx-cookie'></i>
									</div>
									<div class="menu-title">Add category</div>
								</a>
							
							</li>
							<li>
								<a href="{{ route('showproduct')}}">
									<div class="parent-icon"><i class='bx bx-cookie'></i>
									</div>
									<div class="menu-title">Show Product</div>
								</a>
							</li>
						</ul>
						
					</li>
						
				</ul>
				<!--  -->
			<!--end navigation-->
		</div>
