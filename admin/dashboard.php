<?php include"inc/header.php"; ?>

	<!--wrapper-->
	<div class="wrapper">

		<?php include"inc/leftmenu.php"; ?>
		<?php include"inc/topbar.php"; ?>
		
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">

					<div class="col">
						<div class="card radius-10 bg-primary">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Revenue</p>
										<h4 class="my-1 text-white">$75K</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Customers</p>
										<h4 class="my-1 text-white">8.4K</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>1.6K from last week</p>
									</div>
									<div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Store Visitors</p>
										<h4 class="my-1 text-white">59K</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>2.4K from last week</p>
									</div>
									<div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Bounce Rate</p>
										<h4 class="my-1 text-white">34.46%</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>12.2% from last week</p>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="bx bx-line-chart-down"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->


				  <div class="row">
					<div class="col-12 col-lg-8 col-xl-8 d-flex">
					  <div class="card radius-10 w-100">
						<div class="card-body">
						  <div class="d-flex align-items-center mb-3">
							<h5 class="mb-0">Performance</h5>
							<div class="dropdown options ms-auto">
							  <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
								<i class='bx bx-dots-horizontal-rounded'></i>
							  </div>
							  <ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Action</a></li>
								<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
								<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
							  </ul>
							</div>
						  </div>

						  <div class="hstack flex-wrap align-items-center justify-content-between gap-3 gap-sm-4 mb-3 border p-3 radius-10">
                            <div class="">
								<h5 class="mb-0">974 <span class="text-success font-13">56% <i class='bx bx-up-arrow-alt'></i></span></h5>
								<p class="mb-0">Page Views</p>
							</div>
							<div class="vr"></div>
							<div class="">
								<h5 class="mb-0">1,218 <span class="text-danger font-13">34% <i class='bx bx-down-arrow-alt'></i></span></h5>
							    <p class="mb-0">Total Sales</p>
							</div>
							<div class="vr"></div>
							<div class="">
								<h5 class="mb-0">42.8% <span class="text-success font-13">22% <i class='bx bx-up-arrow-alt'></i></span></h5>
							    <p class="mb-0">Conversion Rate</p>
							</div>
						  </div>
		  
						  <div class="chart-js-container1">
							<canvas id="chart1"></canvas>
						  </div>
		  
						</div>
					  </div>
					</div>
					<div class="col-12 col-lg-4 col-xl-4 d-flex">
					  <div class="card radius-10 overflow-hidden w-100">
						<div class="card-body">
						  <div class="d-flex align-items-center mb-3">
							<h5 class="mb-0">Top Categories</h5>
							<div class="dropdown options ms-auto">
							  <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
								<i class='bx bx-dots-horizontal-rounded'></i>
							  </div>
							  <ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Action</a></li>
								<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
								<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
							  </ul>
							</div>
						  </div>
						  <div class="chart-js-container2 mt-4">
							<div class="piechart-legend">
							  <h2 class="mb-1">8,452</h2>
							  <h6 class="mb-0">Total Sessions</h6>
							 </div>
							<canvas id="chart2"></canvas>
						  </div>
						</div>
						<ul class="list-group list-group-flush">
						  <li class="list-group-item d-flex justify-content-between align-items-center border-top">
							Clothing
							<span class="badge bg-primary rounded-pill">558</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
							Electronics
							<span class="badge bg-success rounded-pill">204</span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center">
							Furniture
							<span class="badge bg-danger rounded-pill">108</span>
						  </li>
						</ul>
					  </div>
					</div>
				   </div><!--end row-->

				<div class="card radius-10 w-100">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Weekly Visits</h5>
							</div>
							<div class="dropdown options ms-auto">
								<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
									<i class='bx bx-dots-horizontal-rounded'></i>
								</div>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="javascript:;">Action</a></li>
									<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
									<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="chart-js-container3">
							<canvas id="chart3"></canvas>
						</div>
					</div>
				</div>

				<div class="card radius-10 w-100">
					<div class="card-body">
				
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 g-3">
							<div class="col">
								<div class="p-3 text-center border radius-10">
									<span class="donut"
										data-peity='{ "fill": ["#5e72e4", "#f2f2f2"], "innerRadius": 50, "radius": 32 }'>4/5</span>
				
									<h6 class="mb-0 mt-3">Total Orders : 4K</h6>
								</div>
							</div>
							<div class="col">
								<div class="p-3 text-center border radius-10">
									<span class="donut"
										data-peity='{ "fill": ["#ff2fa0", "#f2f2f2"], "innerRadius": 50, "radius": 32 }'>2/5</span>
				
									<h6 class="mb-0 mt-3">Pending : 1.2K</h6>
								</div>
							</div>
							<div class="col">
								<div class="p-3 text-center border radius-10">
									<span class="donut"
										data-peity='{ "fill": ["#2dce89", "#f2f2f2"], "innerRadius": 50, "radius": 32 }'>3/5</span>
				
									<h6 class="mb-0 mt-3">Delivered : 2.4</h6>
								</div>
							</div>
							<div class="col">
								<div class="p-3 text-center border radius-10">
									<span class="donut"
										data-peity='{ "fill": ["#fb6340", "#f2f2f2"], "innerRadius": 50, "radius": 32 }'>2/5</span>
				
									<h6 class="mb-0 mt-3">Received : 492</h6>
								</div>
							</div>
						</div>
						<!--end row-->
				
					</div>
				</div>

				
				<div class="row row-cols-1 row-cols-lg-3">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">New Customers</h5>
									</div>
									<div class="dropdown options ms-auto">
										<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
										  <i class='bx bx-dots-horizontal-rounded'></i>
										</div>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										</ul>
									  </div>
								</div>
							</div>
							
							<div class="customers-list p-3 mb-3">
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Emy Jackson</h6>
										<p class="mb-0 font-13 text-secondary">emy_jac@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Martin Hughes</h6>
										<p class="mb-0 font-13 text-secondary">martin.hug@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-23.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Laura Madison</h6>
										<p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-24.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Shoan Stephen</h6>
										<p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-20.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Keate Medona</h6>
										<p class="mb-0 font-13 text-secondary">Keate@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-16.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Paul Benn</h6>
										<p class="mb-0 font-13 text-secondary">pauly.b@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-25.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Winslet Maya</h6>
										<p class="mb-0 font-13 text-secondary">winslet_02@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Bruno Bernard</h6>
										<p class="mb-0 font-13 text-secondary">bruno.b@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-17.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Merlyn Dona</h6>
										<p class="mb-0 font-13 text-secondary">merlyn.d@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Alister Campel</h6>
										<p class="mb-0 font-13 text-secondary">alister_42@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Top Products</h5>
									</div>
									<div class="dropdown options ms-auto">
										<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
										  <i class='bx bx-dots-horizontal-rounded'></i>
										</div>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										</ul>
									  </div>
								</div>
							</div>
							<div class="product-list p-3 mb-3">


								<div class="d-flex flex-column gap-3">
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/14.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Yellow Tshirt</h6>
											<p class="mb-0">278 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$24K.00</h6>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/19.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Titan Watch </h6>
											<p class="mb-0">155 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$35K.00</h6>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/04.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Red Sofa</h6>
											<p class="mb-0">234 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$54K.00</h6>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/18.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">iPhone Pro 7</h6>
											<p class="mb-0">450 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$86K.00</h6>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/10.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Light Chair</h6>
											<p class="mb-0">345 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$49K.00</h6>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/08.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Rounded Chair</h6>
											<p class="mb-0">146 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$38K0.00</h6>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3 p-2 border radius-10">
										<div class="">
											<img src="assets/images/products/03.png" width="50" alt="" />
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Fancy Sofa</h6>
											<p class="mb-0">560 Sales</p>
										</div>
										<div class="">
											<h6 class="mb-0">$69K.00</h6>
										</div>
									</div>
								</div>

								

							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100 overflow-hidden">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Social Leads</h5>
									</div>
									<div class="dropdown options ms-auto">
										<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
										  <i class='bx bx-dots-horizontal-rounded'></i>
										</div>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										</ul>
									  </div>
								 </div>
							</div>
							<div class="card-body">
								 <div class="social-leads">
									<div class="d-flex align-items-center gap-3">
										<div class="widgets-icons-small text-white bg-facebook"><i class='bx bxl-facebook-circle' ></i></div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Facebook</h6>
											<p class="mb-0">175</p>
										</div>
										<div class="">45%<i class='bx bx-up-arrow-alt ms-1'></i></div>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-3">
										<div class="widgets-icons-small text-white bg-google"><i class='bx bxl-google' ></i></div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Google</h6>
											<p class="mb-0">960</p>
										</div>
										<div class="">24%<i class='bx bx-up-arrow-alt ms-1'></i></div>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-3">
										<div class="widgets-icons-small text-white bg-twitter"><i class='bx bxl-twitter'></i></div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Twitter</h6>
											<p class="mb-0">245</p>
										</div>
										<div class="">53%<i class='bx bx-up-arrow-alt ms-1'></i></div>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-3">
										<div class="widgets-icons-small text-white bg-linkedin"><i class='bx bxl-linkedin' ></i></div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Linkedin</h6>
											<p class="mb-0">784</p>
										</div>
										<div class="">10%<i class='bx bx-up-arrow-alt ms-1'></i></div>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-3">
										<div class="widgets-icons-small text-white bg-dribbble"><i class='bx bxl-dribbble' ></i></div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Dribbble</h6>
											<p class="mb-0">568</p>
										</div>
										<div class="">15%<i class='bx bx-up-arrow-alt ms-1'></i></div>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-3">
										<div class="widgets-icons-small text-white bg-behance"><i class='bx bxl-behance' ></i></div>
										<div class="flex-grow-1">
											<h6 class="mb-0">Behance</h6>
											<p class="mb-0">790</p>
										</div>
										<div class="">22%<i class='bx bx-up-arrow-alt ms-1'></i></div>
									</div>
									
								 </div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Orders Summary</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Order id</th>
										<th>Product</th>
										<th>Customer</th>
										<th>Date</th>
										<th>Price</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#897656</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/products/12.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Light Blue Chair</h6>
												</div>
											</div>
										</td>
										<td>Brooklyn Zeo</td>
										<td>12 Jul 2020</td>
										<td>$64.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-info radius-30">Pending</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#987549</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/shoes.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Green Sport Shoes</h6>
												</div>
											</div>
										</td>
										<td>Martin Hughes</td>
										<td>14 Jul 2020</td>
										<td>$45.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-primary radius-30">Dispatched</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#685749</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/headphones.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Red Headphone 07</h6>
												</div>
											</div>
										</td>
										<td>Shoan Stephen</td>
										<td>15 Jul 2020</td>
										<td>$67.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-success radius-30">Completed</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#887459</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/idea.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Mini Laptop Device</h6>
												</div>
											</div>
										</td>
										<td>Alister Campel</td>
										<td>18 Jul 2020</td>
										<td>$87.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-success radius-30">Completed</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#335428</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/user-interface.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Purple Mobile Phone</h6>
												</div>
											</div>
										</td>
										<td>Keate Medona</td>
										<td>20 Jul 2020</td>
										<td>$75.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-danger radius-30">Pending</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#224578</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/watch.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Smart Hand Watch</h6>
												</div>
											</div>
										</td>
										<td>Winslet Maya</td>
										<td>22 Jul 2020</td>
										<td>$80.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-primary radius-30">Dispatched</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#447896</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/tshirt.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">T-Shirt Blue</h6>
												</div>
											</div>
										</td>
										<td>Emy Jackson</td>
										<td>28 Jul 2020</td>
										<td>$96.00</td>
										<td>
											<div class="d-grid">
												<a href="javascript:;" class="btn btn-sm btn-outline-danger radius-30">Pending</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions gap-3">
												<a href="javascript:;"><i class='bx bx-trash'></i></a>
												<a href="javascript:;"><i class='bx bx-cloud-download'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
<?php include"inc/footer.php"; ?>