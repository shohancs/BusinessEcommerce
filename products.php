<?php include"inc/header.php"; ?>
<?php include"inc/topbar.php"; ?>

<?php  
    if ( isset($_GET['gen']) ) {
        $cateId = $_GET['gen'];

        $sql = "SELECT * FROM category WHERE status=1 AND id='$cateId'";
        $query = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_assoc($query)) {
            $id           = $row['id'];
            $slug         = $row['slug'];
            $catename     = $row['name'];
            ?>

            <!-- breadcrumb start -->
            <div class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h2><?php echo $catename; ?> collection</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $slug; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- section start -->
            <section class="section-b-space ratio_asos">
                <div class="collection-wrapper">
                    <div class="container">
                        <div class="row">
                            <?php include"inc/sidebar.php"; ?>


                            <div class="collection-content col">
                                <div class="page-main-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="top-banner-wrapper">
                                                <a href="#"><img src="assets/images/mega-menu/2.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="top-banner-content small-section">
                                                    <h4>BIGGEST DEALS ON TOP BRANDS</h4>
                                                    <p>The trick to choosing the best wear for yourself is to keep in mind your
                                                        body type, individual style, occasion and also the time of day or
                                                        weather.
                                                        In addition to eye-catching products from top brands, we also offer an
                                                        easy 30-day return and exchange policy, free and fast shipping across
                                                        all pin codes, cash or card on delivery option, deals and discounts,
                                                        among other perks. So, sign up now and shop for westarn wear to your
                                                        heart’s content on Multikart. </p>
                                                </div>
                                            </div>

                                            

                                            <div class="collection-product-wrapper">

                                                <div class="product-top-filter">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="filter-main-btn"><span
                                                                    class="filter-btn btn btn-theme"><i class="fa fa-filter"
                                                                        aria-hidden="true"></i> Filter</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="product-filter-content">
                                                                <div class="search-count">
                                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                                </div>
                                                                <div class="collection-view">
                                                                    <ul>
                                                                        <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                        <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="collection-grid-view">
                                                                    <ul>
                                                                        <li><img src="assets/images/icon/2.png" alt=""
                                                                                class="product-2-layout-view"></li>
                                                                        <li><img src="assets/images/icon/3.png" alt=""
                                                                                class="product-3-layout-view"></li>
                                                                        <li><img src="assets/images/icon/4.png" alt=""
                                                                                class="product-4-layout-view"></li>
                                                                        <li><img src="assets/images/icon/6.png" alt=""
                                                                                class="product-6-layout-view"></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-page-per-view">
                                                                    <select>
                                                                        <option value="High to low">24 Products Par Page
                                                                        </option>
                                                                        <option value="Low to High">50 Products Par Page
                                                                        </option>
                                                                        <option value="Low to High">100 Products Par Page
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="product-page-filter">
                                                                    <select>
                                                                        <option value="High to low">Sorting items</option>
                                                                        <option value="Low to High">50 Products</option>
                                                                        <option value="Low to High">100 Products</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-wrapper-grid">
                                                    <div class="row margin-res">

                                                        <?php

                                                            $sql = "SELECT * FROM products WHERE cat_id='$cateId' ORDER BY id DESC";
                                                            $query = mysqli_query($db, $sql);

                                                            while($row = mysqli_fetch_assoc($query)) {
                                                                $id             = $row['id'];
                                                                $prd_code       = $row['prd_code'];
                                                                $name           = $row['name'];
                                                                $prd_details           = $row['prd_details'];
                                                                $price          = $row['price'];
                                                                $dsc_price      = $row['dsc_price'];
                                                                $dis_percent    = $row['dis_percent'];
                                                                $quantity       = $row['quantity'];
                                                                $cat_id         = $row['cat_id'];
                                                                $subcat_id      = $row['subcat_id'];
                                                                $season         = $row['season'];
                                                                $brand          = $row['brand'];
                                                                $status         = $row['status'];
                                                                $join_date      = $row['join_date'];
                                                                $img1      = $row['img1'];
                                                                $img2      = $row['img2'];
                                                                ?>

                                                                <div class="col-xl-3 col-6 col-grid-box">
                                                                    <div class="product-box">
                                                                        <div class="img-wrapper">
                                                                            <div class="front">
                                                                                <a href="details.php?did=<?php echo $id; ?>">
                                                                                    <?php  
                                                                                        if ( !empty($img1) ) {
                                                                                            echo '<img src="admin/assets/images/products/' . $img1 . '" alt="" class="img-fluid blur-up lazyload bg-img">';
                                                                                        }
                                                                                        else { ?>
                                                                                            <img
                                                                                        src="assets/images/pro3/36.jpg"
                                                                                         alt="">
                                                                                       <?php }
                                                                                    ?>
                                                                                    </a>
                                                                            </div>
                                                                            <div class="back">
                                                                                <a href="details.php?did=<?php echo $id; ?>">
                                                                                    <?php  
                                                                                        if ( !empty($img1) ) {
                                                                                            echo '<img src="admin/assets/images/products/' . $img1 . '" alt="" class="img-fluid blur-up lazyload bg-img">';
                                                                                        }
                                                                                        else { ?>
                                                                                            <img
                                                                                        src="assets/images/pro3/36.jpg"
                                                                                         alt="">
                                                                                       <?php }
                                                                                    ?></a>
                                                                            </div>
                                                                            <div class="cart-info cart-wrap"><a
                                                                                    href="details.php?did=<?php echo $id; ?>" data-bs-toggle="modal"
                                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                                        class="ti-search" aria-hidden="true"></i></a> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-detail">
                                                                            <div>                    
                                                                                <a href="details.php?did=<?php echo $id; ?>">
                                                                                    <h5 class="text-dark mb-0"><?php echo $name; ?></h5>
                                                                                </a>
                                                                                <span class="text-secondary">Product Code: <?php echo $prd_code; ?></span>
                                                                                <p><?php echo $prd_details; ?></p>
                                                                                <h4 class="pt-2">BDT <?php echo $dsc_price; ?> <span><del> ৳ <?php echo $price; ?></del></span></h4>
                                                                                <form action="" method="POST">
                                                                                    <div class="d-grid gap-2 mt-3">
                                                                                        <input type="hidden" name="cartId" value="<?php echo $id; ?>">
                                                                                            <button type="submit" name="cart" id="cartEffect" class="btn btn-solid hover-solid btn-animation"> <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> add to cart</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <?php
                                                            }

                                                            }
                                                        ?>

                                                        
                                                        
                                                    </div>
                                                </div>

                                                <div class="product-pagination">
                                                    <div class="theme-paggination-block">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                                <nav aria-label="Page navigation">
                                                                    <ul class="pagination">
                                                                        <li class="page-item"><a class="page-link" href="#"
                                                                                aria-label="Previous"><span
                                                                                    aria-hidden="true"><i
                                                                                        class="fa fa-chevron-left"
                                                                                        aria-hidden="true"></i></span> <span
                                                                                    class="sr-only">Previous</span></a></li>
                                                                        <li class="page-item active"><a class="page-link"
                                                                                href="#">1</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">2</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">3</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#"
                                                                                aria-label="Next"><span aria-hidden="true"><i
                                                                                        class="fa fa-chevron-right"
                                                                                        aria-hidden="true"></i></span> <span
                                                                                    class="sr-only">Next</span></a></li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                                <div class="product-search-count-bottom">
                                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section End -->

            <?php
        }
        ?>
        
        


    





    <?php include"inc/footer.php"; ?>