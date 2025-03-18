<?php include"inc/header.php"; ?>
<?php include"inc/topbar.php"; ?>


    <!-- Home slider -->
    <section class="p-0">
        <div class="slider-animate home-slider">
            <div>
                <div class="home height-apply p-bottom">
                    <img src="assets/images/project/slider.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>
                                        <h4>save 30%</h4>
                                        <h1>special products</h1><a href="#"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home height-apply p-bottom">
                    <img src="assets/images/project/slider2.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>
                                        <h4>save 30%</h4>
                                        <h1>special products</h1><a href="#"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- category section start -->
    <section>
        <div class="container container-lg">
            <div class="row margin-default ratio_square">
                

                <?php  
                    $sql = "SELECT * FROM category WHERE status=1";
                    $query = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_assoc($query)) {
                        $catid          = $row['id'];
                        $catname       = $row['name'];

                         $sql = "SELECT * FROM subcategory WHERE status=1";
                         $query = mysqli_query($db, $sql);

                         while ($row = mysqli_fetch_assoc($query)) {
                            $subid          = $row['id'];
                            $subname       = $row['name'];
                            $prf_img    = $row['prf_img'];
                            ?>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                                <a href="#">
                                    <div class="gradient-category">
                                        <div class="gradient-border">
                                            <div class="img-sec">
                                                <?php 
                                                    if ( !empty( $prf_img ) ) {
                                                        echo '<img src="admin/assets/images/sub_images/' . $prf_img . '" alt="" class="img-fluid">';
                                                    }
                                                    else { 
                                                        echo 'No IMG';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <h4><?php echo $subname ; ?></h4>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }

                    }

                    
                ?>
            </div>
        </div>
    </section>
    <!-- category section end -->


    <!-- collection banner -->
    <section class="pb-0 ratio2_1">
        <div class="container container-lg">
            <div class="row partition2">
                <?php  
                    $sql = "SELECT * FROM category WHERE status=1 ORDER BY id ASC";
                    $query = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_assoc($query)) {
                        $id         = $row['id'];
                        $name       = $row['name'];
                        $prf_img    = $row['prf_img'];
                        ?>
                        <div class="col-md-6 pb-4">
                            <a href="products.php?gen=<?php echo $id; ?>">
                                <div class="collection-banner p-right text-center">
                                    <div class="img-part">
                                        <?php 
                                            if ( !empty( $prf_img ) ) {
                                                echo '<img src="admin/assets/images/sub_images/' . $prf_img . '" alt="" class="img-fluid blur-up lazyload bg-img">';
                                            }
                                            else { 
                                                echo 'No IMG';
                                            }
                                        ?>
                                    </div>
                                    <div class="contain-banner">
                                        <div>
                                            <h4>save 30%</h4>
                                            <h2><?php echo $name; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                ?>
                

            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- product slider -->
    <section class="ratio_asos gradient-slider">
        <div class="container container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy">
                        <h4>exclusive products</h4>
                        <h2 class="title-inner1 title-gradient">special products</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="product-5 product-m no-arrow">
                        
                        <?php  
                            $sql = "SELECT * FROM products WHERE status=1 ORDER BY id DESC LIMIT 5";
                            $query = mysqli_query($db, $sql);

                            while ($row = mysqli_fetch_assoc($query)) {
                                $id         = $row['id'];
                                $prd_code   = $row['prd_code'];
                                $name       = $row['name'];
                                $price      = $row['price'];
                                $dsc_price  = $row['dsc_price'];
                                $img1       = $row['img1'];
                                ?>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable-gradient">new</span> <span class="lable4 text-danger">on
                                                sale</span></div>
                                        <a href="product-page(no-sidebar).html">
                                            <?php  
                                                if ( !empty($img1) ) {
                                                    echo '<img src="admin/assets/images/products/' . $img1 . '" alt="" class="img-fluid blur-up lazyload bg-img">';
                                                }
                                                else { ?>
                                                    <img
                                                src="assets/images/gradient/product/5.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                               <?php }
                                            ?>

                                            
                                        </a>
                                        <div class="cart-box cart-box-bottom">
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                                href="#" data-bs-toggle="modal" data-bs-target="#quick-view"
                                                title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="detail-inline">
                                            <a href="product-page(no-sidebar).html">
                                                <h6><?php echo $name; ?></h6>
                                            </a>
                                            <h4 class="text-danger">৳ <?php echo $dsc_price; ?> &nbsp;</h4>
                                            <span><del> ৳ <?php echo $price; ?></del></span>
                                        </div>
                                        <div class="detail-inline">
                                            <h6><?php echo $prd_code; ?></h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php
                            }
                        ?>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider -->


    <!-- deal zone section start -->
    <section class="section-b-space">
        <div class="container-lg container">
            <div class="row margin-default ratio_square justify-content-center">
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="assets/images/gradient/deal-bg/1.jpg" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>40%</h2>
                                    <h2>60%</h2>
                                    <h2 class="mb-0">off</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="assets/images/gradient/deal-bg/2.jpg" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>Flat</h2>
                                    <h2 class="mb-0">off</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-4">
                    <a href="#">
                        <div class="deal-category">
                            <img src="assets/images/gradient/deal-bg/6.jpg" class="img-fluid w-100" alt="">
                            <div class="deal-content">
                                <div>
                                    <h2>Ship.</h2>
                                    <h2 class="mb-0">zone</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- deal zone section end -->


    <!-- Parallax banner -->
    <section class="p-0 pet-parallax">
        <div class="full-banner section-space parallax text-center p-right">
            <img src="assets/images/project/women.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>2018</h2>
                            <h3>fashion trends</h3>
                            <h4>special offer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- Parallax banner -->
    <section class="p-0 pet-parallax">
        <div class="full-banner section-space parallax text-center p-left">
            <img src="assets/images/project/men.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>2018</h2>
                            <h3>fashion trends</h3>
                            <h4>special offer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- instagram section -->
    <section class="instagram ratio_square gym-parallax">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="title-borderless title-gradient"># Facebook</h2>
                    <div class="slide-7 no-arrow slick-instagram">
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/1.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/2.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/3.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/4.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/5.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/6.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/7.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/3.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box"> <img src="assets/images/gradient/instagram/5.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="fa fa-facebook"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->

<?php include"inc/footer.php"; ?>