<?php include"inc/header.php"; ?>

	<!--wrapper-->
	<div class="wrapper">

		<?php include"inc/leftmenu.php"; ?>
		<?php include"inc/topbar.php"; ?>
		
		<!--start Body Content -->
		<div class="page-wrapper">
			<div class="page-content">

				<?php  
					$do = isset($_GET['do']) ? $_GET['do'] : "Manage";

					if ( $do == "Manage" ) { ?>
						<!-- Breadcump -->
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">All Products Lists</h5>
									</div>
								</div>

								<hr>

								<!-- Table Start -->
								<div class="table-responsive">
									<table class="table table-striped table-hover table-bordered" id="example">
									  <thead class="table-dark">
									    <tr class="text-center">
									      <th scope="col">#Sl</th>
									      <th scope="col">Prd_Code</th>
									      <th scope="col">Prd_Name</th>
									      <th scope="col">Category</th>
									      <th scope="col">Sub Category</th>
									      <th scope="col">Brand</th>
									      <th scope="col">Season</th>
									      <th scope="col">Quantity</th>
									      <th scope="col">Discount %</th>
									      <th scope="col">Reg_Price</th>
									      <th scope="col">Dis_Price</th>
									      <th scope="col">Join Date</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php  
									  		$sql = "SELECT * FROM category WHERE status=1 ORDER BY id ASC";
									  		$query = mysqli_query($db, $sql);
									  		$count = mysqli_num_rows($query);

									  		if ( $count == 0 ) { ?>
									  			<div class="alert alert-danger" role="alert">
												  Sorry! No Data Found.
												</div>
									  		<?php }
									  		else {
									  			$i = 0;
									  			while ($row = mysqli_fetch_assoc($query)) {
										  			$id  		= $row['id'];
										  			$name  		= $row['name'];
										  			$slug  		= $row['slug'];
										  			$count  	= $row['count'];
										  			$status  	= $row['status'];
										  			$join_date  = $row['join_date'];
										  			$i++;
										  			?>
										  			<tr class="text-center">
												      <th scope="row"><?php echo $i; ?></th>
												      <td><?php echo $name; ?></td>
												      <td><?php echo $slug; ?></td>
												      <td><?php echo $count; ?></td>
												      <td>
												      	<?php  
												      		if ( $status == 1 ) { ?>
												      			<span class="badge text-bg-success">Active</span>
												      		<?php }
												      		else if ( $status == 0 ) { ?>
												      			<span class="badge text-bg-danger">InActive</span>
												      		<?php }
												      	?>
												      </td>
												      <td><?php echo $join_date; ?></td>
													  <td>
													  	<div class="d-flex justify-content-center">
													  		<a href="category.php?do=Edit&Id=<?php echo $id; ?>" class="btn btn-success btn-sm me-3">Edit</a>
													  		<a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#trush<?php echo $id; ?>">Trash</a>
													  	</div>
													  </td>
													  <!-- Modal Start -->
													  <div class="modal fade" id="trush<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														  <div class="modal-dialog">
														    <div class="modal-content">
														      <div class="modal-header">
														        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure <strong class="text-danger"><?php echo $name; ?></strong>  Move Trash !</h1>
														        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														      </div>
														      <div class="modal-body">
														        <div class="modal-footer justify-content-center">
																	<a href="category.php?do=Trash&tData=<?php echo $id; ?>" class="btn btn-primary">Yes</a>
																	<a href="" class="btn btn-dark" data-bs-dismiss="modal">No</a>		      	
														        </div>
														      </div>
														    </div>
														  </div>
														</div>
													  <!-- Modal End -->
												    </tr>
										  			<?php
										  		}

									  		}

									  		
									  	?>
									    
									  </tbody>
									</table>
								</div>
								<!-- Table End -->

							</div>
						</div>
						<!-- Breadcump -->
					<?php }

					else if ( $do == "Add" ) { ?>
						<!-- Breadcump -->
						<div class="card radius-10">							
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Add New Product</h5>
									</div>
								</div>

								<hr>
								<div class="row">
									<div class="col-12">
										<div class="card radius-10 mb-0 shadow-none border p-3">

										<!-- Form Start -->
										<form action="products.php?do=Store" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-6">
													<div class="mb-3">
														<label for="">Category Name</label>
														<select class="form-select" name="cat_id">
															<option value="1">Please select the Category</option>
															<?php  
																$sql = "SELECT * FROM category WHERE status=1 ORDER BY count ASC";
																$query = mysqli_query($db, $sql);

																while($row = mysqli_fetch_assoc($query)) {
																	$id  		= $row['id'];
												  					$name  		= $row['name'];
												  					?>
												  					<option value="<?php echo $id; ?>"><?php echo $name; ?></option>
												  					<?php
																}
															?>
														</select>
													</div>

													<div class="mb-3">
														<label for="">Sub Category Name</label>
														<select class="form-select" name="sub_id">
															<option value="1">Please select the Sub Category</option>
															<?php  
																$sql = "SELECT * FROM subcategory WHERE status=1 ORDER BY count ASC";
																$query = mysqli_query($db, $sql);

																while($row = mysqli_fetch_assoc($query)) {
																	$id  		= $row['id'];
												  					$name  		= $row['name'];
												  					?>
												  					<option value="<?php echo $id; ?>"><?php echo $name; ?></option>
												  					<?php
																}
															?>
														</select>
													</div>
													<div class="mb-3">
														<label for="">Product Name</label>
														<input type="text" name="prd_name" class="form-control" required autocomplete="off" placeholder="enter product name">
													</div>

													<div class="mb-3">
														<label for="">Product Code</label>
														<input type="text" name="prd_code" class="form-control" required autocomplete="off" placeholder="enter product code">
													</div>

													<div class="mb-3">
														<label for="">Brand</label>
														<input type="text" name="brand" class="form-control" required autocomplete="off" placeholder="enter Brand name">
													</div>

													<div class="mb-3">
														<label for="">Quantity</label>
														<input type="number" name="quantity" class="form-control" required autocomplete="off" placeholder="products quantity">
													</div>

													<div class="mb-3">
														<label for="">Regualar Price</label>
														<input type="number" name="rprice" class="form-control" required autocomplete="off" placeholder="enter regular price">
													</div>

													<div class="mb-3">
														<label for="">Discount Price</label>
														<input type="number" name="dprice" class="form-control" required autocomplete="off" placeholder="enter discount price">
													</div>

													<div class="mb-3">
														<label for="">Discount Percent</label>
														<input type="text" name="dis_percent" class="form-control" required autocomplete="off" placeholder="enter discount %">
													</div>										

													

													<div class="mb-3">
														<label for="">Season</label>
														<input type="text" name="season" class="form-control" required autocomplete="off" placeholder="enter season name">
													</div>

													<div class="mb-3">
														<label for="">Size</label>
														<input type="text" name="size" class="form-control" required autocomplete="off" placeholder="enter size">
													</div>

													<div class="mb-3">
														<label for="">Color</label>
														<input type="text" name="color" class="form-control" required autocomplete="off" placeholder="enter color">
													</div>

													<div class="mb-3">
														<label for="">Material</label>
														<input type="text" name="material" class="form-control" required autocomplete="off" placeholder="enter dress material">
													</div>


												</div>
												<div class="col-6">

													<div class="mb-3">
														<label for="">Product Details</label>
														<textarea name="prd_details" cols="30" rows="2" class="form-control" placeholder="details"></textarea>
													</div>

													<div class="mb-3">
														<label for="">Image 1</label>
														<input type="file" name="img1" class="form-control">
													</div>

													<div class="mb-3">
														<label for="">Image 2</label>
														<input type="file" name="img2" class="form-control">
													</div>

													<div class="mb-3">
														<label for="">Image 3</label>
														<input type="file" name="img3" class="form-control">
													</div>

													<div class="mb-3">
														<label for="">Image 4</label>
														<input type="file" name="img4" class="form-control">
													</div>

													<div class="mb-3">
														<label for="">Image 5</label>
														<input type="file" name="img5" class="form-control">
													</div>

													<div class="mb-3">
														<label for="">Size Chart Imaage</label>
														<input type="file" name="chart" class="form-control">
													</div>

													<div class="mb-3">
														<label for="">Status</label>
														<select class="form-select" name="status">
															<option value="1">Please select the status</option>
															<option value="1">Active</option>
															<option value="0">InActive</option>
														</select>
													</div>

													<div class="mb-3">
														<div class="d-grid gap-2">
															<input type="submit" name="addPrd" class="btn btn-dark" value="Add New Product">
														</div>
													</div>
												</div>
											</div>
											

											
										</form>
										<!-- Form End -->
									</div>
								</div>								
								</div>
							</div>
						</div>
						<!-- Breadcump -->
					<?php }

					else if ( $do == "Store" ) { 
						if ( isset($_POST['addPrd']) ) {
							$cat_id 	  	= mysqli_real_escape_string($db, $_POST['cat_id']);
							$sub_id 	  	= mysqli_real_escape_string($db, $_POST['sub_id']);
							$prd_name 	  	= mysqli_real_escape_string($db, $_POST['prd_name']);
							$prd_code 	  	= mysqli_real_escape_string($db, $_POST['prd_code']);
							$brand 		  	= mysqli_real_escape_string($db, $_POST['brand']);
							$quantity 	  	= mysqli_real_escape_string($db, $_POST['quantity']);
							$rprice 	  	= mysqli_real_escape_string($db, $_POST['rprice']);
							$dprice 	  	= mysqli_real_escape_string($db, $_POST['dprice']);
							$dis_percent 	= mysqli_real_escape_string($db, $_POST['dis_percent']);
							$season 	  	= mysqli_real_escape_string($db, $_POST['season']);
							$size 		  	= mysqli_real_escape_string($db, $_POST['size']);
							$color 		  	= mysqli_real_escape_string($db, $_POST['color']);
							$material 	  	= mysqli_real_escape_string($db, $_POST['material']);
							$prd_details  	= mysqli_real_escape_string($db, $_POST['prd_details']);
							$status 	  	= mysqli_real_escape_string($db, $_POST['status']);


							// Image 1
							$img_one 		= mysqli_real_escape_string($db, $_FILES['img1']['name']);
							$tmpImgOne 		= $_FILES['img1']['tmp_name'];

							if ( !empty($img_one) ) {
								$img1 = rand(0, 999999) . "_" . $img_one;
								move_uploaded_file($tmpImgOne, 'assets/images/products/' . $img1);
							}
							else {
								$img1 = "";
							}

							// Image 2
							$img_two 		= mysqli_real_escape_string($db, $_FILES['img2']['name']);
							$tmpImgTwo 		= $_FILES['img2']['tmp_name'];

							if ( !empty($img_two) ) {
								$img2 = rand(0, 999999) . "_" . $img_two;
								move_uploaded_file($tmpImgTwo, 'assets/images/products/' . $img2);
							}
							else {
								$img2 = "";
							}

							// Image 3
							$img_three 		= mysqli_real_escape_string($db, $_FILES['img3']['name']);
							$tmpImgThree 	= $_FILES['img3']['tmp_name'];

							if ( !empty($img_three) ) {
								$img3 = rand(0, 999999) . "_" . $img_three;
								move_uploaded_file($tmpImgThree, 'assets/images/products/' . $img3);
							}
							else {
								$img3 = "";
							}

							// Image 4
							$img_four 		= mysqli_real_escape_string($db, $_FILES['img4']['name']);
							$tmpImgFour 	= $_FILES['img4']['tmp_name'];

							if ( !empty( $img_four ) ) {
								$img4 = rand( 0, 999999 ) . "_" . $img_four;
								move_uploaded_file($tmpImgFour, 'assets/images/products/' . $img4);
							}
							else {
								$img4 = "";
							}

							// Image 5
							$img_five 		= mysqli_real_escape_string($db, $_FILES['img5']['name']);
							$tmpImgFive 	= $_FILES['img5']['tmp_name'];

							if ( !empty($img_five) ) {
								$img5 = rand( 0, 9999999 ) . "_" . $img_five;
								move_uploaded_file($tmpImgFive, 'assets/images/products/' . $img5);
							}
							else {
								$img5 = "";
							}

							// Chart Image
							$chart_Img 		= mysqli_real_escape_string($db, $_FILES['chart']['name']);
							$tmpImgChart    = $_FILES['chart']['tmp_name'];

							if ( !empty($chart_Img) ) {
								$chart = rand(0, 999999) . "_" . $chart_Img;
								move_uploaded_file($tmpImgChart, 'assets/images/products/' . $chart);
							}
							else {
								$chart = "";
							}
							

							// Start: For Slug Making
							function createSlug( $prd_name ) {
								// Convert to Lower case
								$slug = strtolower($prd_name); 

								// Remove Special Character
								$slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);

								// Replace multiple spaces or hyphens with a single hyphen
								$slug = preg_replace('/[\s-]+/', ' ', $slug);

								// Replace spaces with hyphens
								$slug = preg_replace('/\s/', '-', $slug);

								// Trim leading and trailing hyphens
								$slug = trim($slug, '-');

								return $slug;
							}
							$slug = createSlug($prd_name);
							// End: For Slug Making

							$sql = "INSERT INTO products (prd_code, name, slug, prd_details, price, dsc_price, dis_percent, quantity, cat_id, subcat_id, season, size, color, material, brand, img1, img2, img3, img4, img5, char_img, status, join_date ) VALUES('$prd_code', '$prd_name', '$slug', '$prd_details', '$rprice', '$dprice', '$dis_percent', '$quantity', '$cat_id', '$sub_id', '$season', '$size', '$color', '$material', '$brand', '$img1', '$img2', '$img3', '$img4', '$img5', '$chart', '$status', now() )";
							$query = mysqli_query($db, $sql);

							if ( $query ) {
								header("Location: products.php?do=Manage");
							}
							else {
								die("Mysql Error." . mysqli_error($db));
							}
						}
					}

					else if ( $do == "Edit" ) {
						if ( isset($_GET['Id']) ) {
							$editId = $_GET['Id'];
							$sql = "SELECT * FROM category WHERE id='$editId'";
							$query = mysqli_query($db, $sql);

							while($row = mysqli_fetch_assoc($query)){
								$id  		= $row['id'];
					  			$name  		= $row['name'];
					  			$slug  		= $row['slug'];
					  			$count  	= $row['count'];
					  			$status  	= $row['status'];
					  			$join_date  = $row['join_date'];
					  			?>
					  			<!-- Breadcump -->
								<div class="card radius-10">							
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div>
												<h5 class="mb-0">Edit Category</h5>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-lg-6">
												<div class="card radius-10 mb-0 shadow-none border p-3">

												<!-- Form Start -->
												<form action="category.php?do=Update" method="POST">
													<div class="mb-3">
														<label for="">Category Name</label>
														<input type="text" name="cat_name" class="form-control" required autocomplete="off" placeholder="enter category name" value="<?php echo $name; ?>">
													</div>

													<div class="mb-3">
														<label for="">Category Number</label>
														<input type="number" name="count" class="form-control" required autocomplete="off" placeholder="enter category number" value="<?php echo $count; ?>">
													</div>

													<div class="mb-3">
														<label for="">Status</label>
														<select class="form-select" name="status">
															<option value="1">Please select the status</option>
															<option value="1" <?php if($status == 1){ echo "selected"; } ?>>Active</option>
															<option value="0" <?php if($status == 0){ echo "selected"; } ?>>InActive</option>
														</select>
													</div>

													<div class="mb-3">
														<div class="d-grid gap-2">
															<input type="hidden" name="upId" value="<?php echo $id; ?>">
															<input type="submit" name="updateCat" class="btn btn-dark" value="Update Category">
														</div>
													</div>
												</form>
												<!-- Form End -->
											</div>
										</div>								
										</div>
									</div>
								</div>
								<!-- Breadcump -->
					  			<?php
							}
						}
					}

					else if ( $do == "Update" ) {
						if ( isset( $_POST['updateCat'] ) ) {
							$updateId 	= mysqli_real_escape_string($db, $_POST['upId']);
							$catName 	= mysqli_real_escape_string($db, $_POST['cat_name']);
							$count 		= mysqli_real_escape_string($db, $_POST['count']);
							$status 	= mysqli_real_escape_string($db, $_POST['status']);

							// Start: For Slug Making
							function createSlug( $catName ) {
								// Convert to Lower case
								$slug = strtolower($catName); 

								// Remove Special Character
								$slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);

								// Replace multiple spaces or hyphens with a single hyphen
								$slug = preg_replace('/[\s-]+/', ' ', $slug);

								// Replace spaces with hyphens
								$slug = preg_replace('/\s/', '-', $slug);

								// Trim leading and trailing hyphens
								$slug = trim($slug, '-');

								return $slug;
							}
							$slug = createSlug($catName);
							// End: For Slug Making

							$sql = "UPDATE category SET name='$catName', slug='$slug', count='$count', status='$status' WHERE id='$updateId'";
							$query = mysqli_query($db, $sql);

							if ( $query ) {
								header("Location: category.php?do=Manage");
							}
							else {
								die("Mysql Error." . mysqli_error($db));
							}

						}
					}

					else if ( $do == "Trash" ) {
						if ( isset($_GET['tData']) ) {
							$trashId = $_GET['tData'];
							$sql = "UPDATE category SET status = 0 WHERE id='$trashId'";
							$query = mysqli_query($db, $sql);

							if ( $query ) {
								header("Location: category.php?do=Manage");
							}
							else {
								die("Mysql Error." . mysqli_error($db));
							}
						}
					}

					else if ( $do == "ManageTrash" ) { ?>
						<!-- Breadcump -->
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">All Category Trash Lists</h5>
									</div>
								</div>

								<hr>

								<!-- Table Start -->
								<div class="table-responsive">
									<table class="table table-striped table-hover table-bordered" id="example">
									  <thead class="table-dark">
									    <tr class="text-center">
									      <th scope="col">#Sl</th>
									      <th scope="col">Name</th>
									      <th scope="col">Slug</th>
									      <th scope="col">Serial</th>
									      <th scope="col">Status</th>
									      <th scope="col">Join Date</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php  
									  		$sql = "SELECT * FROM category WHERE status=0 ORDER BY id ASC";
									  		$query = mysqli_query($db, $sql);
									  		$count = mysqli_num_rows($query);

									  		if ( $count == 0 ) { ?>
									  			<div class="alert alert-danger" role="alert">
												  Sorry! No Data Found.
												</div>
									  		<?php }
									  		else {
									  			$i = 0;
									  			while ($row = mysqli_fetch_assoc($query)) {
										  			$id  		= $row['id'];
										  			$name  		= $row['name'];
										  			$slug  		= $row['slug'];
										  			$count  	= $row['count'];
										  			$status  	= $row['status'];
										  			$join_date  = $row['join_date'];
										  			$i++;
										  			?>
										  			<tr class="text-center">
												      <th scope="row"><?php echo $i; ?></th>
												      <td><?php echo $name; ?></td>
												      <td><?php echo $slug; ?></td>
												      <td><?php echo $count; ?></td>
												      <td>
												      	<?php  
												      		if ( $status == 1 ) { ?>
												      			<span class="badge text-bg-success">Active</span>
												      		<?php }
												      		else if ( $status == 0 ) { ?>
												      			<span class="badge text-bg-danger">InActive</span>
												      		<?php }
												      	?>
												      </td>
												      <td><?php echo $join_date; ?></td>
													  <td>
													  	<div class="d-flex justify-content-center">
													  		<a href="category.php?do=Edit&Id=<?php echo $id; ?>" class="btn btn-success btn-sm me-3">Edit</a>
													  		<a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#del<?php echo $id; ?>">Trash</a>
													  	</div>
													  </td>
													  <!-- Modal Start -->
													  <div class="modal fade" id="del<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														  <div class="modal-dialog">
														    <div class="modal-content">
														      <div class="modal-header">
														        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure <strong class="text-danger"><?php echo $name; ?></strong>  Delete !</h1>
														        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														      </div>
														      <div class="modal-body">
														        <div class="modal-footer justify-content-center">
																	<a href="category.php?do=Delete&dData=<?php echo $id; ?>" class="btn btn-primary">Yes</a>
																	<a href="" class="btn btn-dark" data-bs-dismiss="modal">No</a>		      	
														        </div>
														      </div>
														    </div>
														  </div>
														</div>
													  <!-- Modal End -->
												    </tr>
										  			<?php
										  		}

									  		}

									  		
									  	?>
									    
									  </tbody>
									</table>
								</div>
								<!-- Table End -->

							</div>
						</div>
						<!-- Breadcump -->
					<?php }

					else if ( $do == "Delete" ) {
						if ( isset($_GET['dData']) ) {
							$delId = $_GET['dData'];
							$sql = "DELETE FROM category WHERE id='$delId'";
							$query = mysqli_query($db, $sql);

							if ( $query ) {
								header("Location: category.php?do=ManageTrash");
							}
							else {
								die("Mysql Error." . mysqli_error($db));
							}
						}
					}
				?>
				

			</div>
		</div>
		<!--end Body Content -->
<?php include"inc/footer.php"; ?>